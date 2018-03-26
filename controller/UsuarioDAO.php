<?php
require_once 'Crud.php';
require_once '../model/Usuario.php';


class UsuarioDAO extends Crud
{
	protected $tabela = 'tbUsuario';

	function __construct($login, $senha)
	{
		$this->login = $login;
		$this->senha = $senha;
	}
	//verifica se a senha e login estao ok e retorna true or false
	public function logar($login, $senha)
	{

		$sql = "SELECT * FROM $this->tabela WHERE login = ? AND senha = ?";
		$stmt = Conexao::prepare($sql);

		$stmt->bindValue(1, $this->login);
		$stmt->bindValue(2, $this->senha);
		$stmt->execute();
		if ($stmt->rowCount() == 1) :
			$data = $stmt->fetch(PDO::FETCH_OBJ);
			$_SESSION['nome'] = $data->nome; // passa o nome do usuario para a variavel da sessao
			$_SESSION['ativa'] = true; //  variavel que informa se a sessao esta ativa.
		return true;
		else :
			return false;
		endif;
	}
	//gera uma sessao e passa o nome do usuario pra variavel sessao
	function geraSessao($usuario)
	{
		session_start();
		$_SESSION['usuario'] = $usuario;
	}
	//deslogar do sistema
	public static function deslogar()
	{
		unset($_SESSION['login']);
		session_destroy();
		header("Location: /login-poo-php");
	}

	public function gravar()
	{
		
		
			if (isset($_POST['nome'])) {
				$nome = $_POST['nome'];
			}
			if (isset($_POST['email'])) {
				$email = $_POST['email'];
			}
			if (isset($_POST['login'])) {
				$login = $_POST['login'];
			}
			if (isset($_POST['senha'])) {
				$senha = $_POST['senha'];
			}
			if (isset($_POST['status'])) {
				$status = $_POST['status'];
			}
		
		
		$sql = "INSERT INTO $this->tabela (nome, email, login, senha, status) VALUES 
		(:nome, :email,:login,:senha,:status)";
		$stmt = Conexao::prepare($sql);
		//cria usuario e adiciona
		$usuario = new Usuario();
	
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':status', $status);
        
		return $stmt->execute();


	}

	
	public function atualizar($id)
	{
		$sql = "UPDATE $this->tabela SET 
		nome = :nome,
		email = :email,
		login = :login,
		senha = :senha,
		status = :status WHERE id = :id";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':nome', $usuario->getNome());
		$stmt->bindParam(':email', $usuario->getEmail());
		$stmt->bindParam(':login', $usuario->getLogin());
		$stmt->bindParam(':senha', $usuario->getSenha());
		$stmt->bindParam(':status', $usuario->getStatus());
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}


	public function deletar($idSelecionado)
	{
	
	}
}

?>
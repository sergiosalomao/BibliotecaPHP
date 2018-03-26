<?php
require_once '../DB/Conexao.php';
abstract class Crud extends Conexao
{
	protected $tabela;
	abstract public function gravar();
	abstract public function atualizar($id);
	abstract public function deletar($id);

	public function ListarPor($id)
	{
		$sql = "SELECT * FROM $this->tabela WHERE id = :id";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}
	public function ListarTodos()
	{
		$sql = "SELECT * FROM $this->tabela";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
}
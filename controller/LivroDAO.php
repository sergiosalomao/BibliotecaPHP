<?php
require_once 'Crud.php';
require_once '../model/Livro.php';


class LivroDAO extends Crud
{
    protected $tabela = 'tbLivro';




    public function gravar()
    {

        if (isset($_POST['titulo'])) {
            $titulo = $_POST['titulo'];
        }
        if (isset($_POST['descricao'])) {
            $descricao = $_POST['descricao'];
        }
        if (isset($_POST['statusLeitura'])) {
            $statusLeitura = $_POST['statusLeitura'];
        }
        if (isset($_POST['numPaginas'])) {
            $numPaginas = $_POST['numPaginas'];
        }
        if (isset($_POST['idCategoria'])) {
            $idCategoria = $_POST['idCategoria'];
        }
        if (isset($_POST['capa'])) {
            $capa = $_POST['capa'];
        }

        echo $titulo;

        $sql = "INSERT INTO $this->tabela (titulo, descricao, statusLeitura, numPaginas, id_tbCategoria, capa) VALUES 
		(:titulo, :descricao,:statusLeitura,:numPaginas,:id_tbCategoria,:capa)";
        $stmt = Conexao::prepare($sql);
		//cria livro e adiciona

        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':statusLeitura', $statusLeitura);
        $stmt->bindParam(':numPaginas', $numPaginas);
        $stmt->bindParam(':id_tbCategoria', $idCategoria);
        $stmt->bindParam(':capa', $capa);
        return $stmt->execute();
       // header("location:../view/listaLivros.php");
    }


    public function atualizar($idSelecionado)
    {
        if (isset($_POST['titulo'])) {
            $titulo = $_POST['titulo'];
        }
        if (isset($_POST['descricao'])) {
            $descricao = $_POST['descricao'];
        }
        if (isset($_POST['statusLeitura'])) {
            $statusLeitura = $_POST['statusLeitura'];
        }
        if (isset($_POST['numPaginas'])) {
            $numPaginas = $_POST['numPaginas'];
        }
        if (isset($_POST['idCategoria'])) {
            $idCategoria = $_POST['idCategoria'];
        }
        if (isset($_POST['capa'])) {
            $capa = $_POST['capa'];
        }



        $sql = "UPDATE $this->tabela SET 
		titulo = :titulo,
		descricao = :descricao,
		statusLeitura = :statusLeitura,
		numPaginas = :numPaginas,
		id_tbCategoria = :id_tbCategoria,
        capa = :capa WHERE id = :id";

        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':statusLeitura', $statusLeitura);
        $stmt->bindParam(':numPaginas', $numPaginas);
        $stmt->bindParam(':id_tbCategoria', $idCategoria);
        $stmt->bindParam(':capa', $capa);
        $stmt->bindParam(':id', $idSelecionado);

        return $stmt->execute();
        


    }

    public function deletar($id)
    {
        $sql = "DELETE FROM $this->tabela WHERE id = :id";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
        //header("location:../view/listaLivros.php");

    }

}
?>
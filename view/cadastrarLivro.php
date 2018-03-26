<?php

require_once '../model/Livro.php';
require_once '../controller/LivroDAO.php';

include 'menu.php';

?>
<p class="lead">
Cadastro de Livros
</p>

<?php
if (isset($_POST['acao_gravar'])){
if (isset($_POST['titulo'])){$titulo = $_POST['titulo'];}
if (isset($_POST['descricao'])){$descricao = $_POST['descricao'];}
if (isset($_POST['statusLeitura'])){$statusLeitura = $_POST['statusLeitura'];}
if (isset($_POST['numPaginas'])){$numPaginas = $_POST['numPaginas'];}
if (isset($_POST['idCategoria'])){$idCategoria = $_POST['idCategoria'];}
if (isset($_POST['capa'])){$capa = $_POST['capa'];}

$livro = new Livro();
$livro->setTitulo($titulo);
$livro->setDescricao($descricao);
$livro->setStatusLeitura($statusLeitura);
$livro->setNumPaginas($numPaginas);
$livro->setIdCategoria($idCategoria);
$livro->setCapa($capa);

$dao = new LivroDAO();
$dao->gravar();

}
?>

  <form method="post" action="">
        <div class="form-group">
            <span class="add-on"><i class="icon-user"></i></span>
            <input  class="form-control" type="text" name="titulo"  placeholder="titulo:" />
        </div>
        <br />
        <div class="form-group">
            <span class="add-on"><i class="icon-envelope"></i></span>
            <input  class="form-control" type="text" name="descricao" placeholder="Descricao:" />
        </div>
        <br />
        <select id="prio" class="custom-select" name="statusLeitura">
					<option selected value="NÃO LIDO">Selecione o status da Leitura</option>
					<option value="NÃO LIDO">NÃO LIDO</option>
					<option value="LENDO">LENDO</option>
					<option value="LIDO">LIDO</option>
				</select>
        <br />
        <br />
        <div class="form-group">
            <span class="add-on"><i class="icon-user"></i></span>
            <input  class="form-control" type="text" name="numPaginas"  placeholder="Numero de Paginas:" />
        </div>
        <br />
        <div class="form-group">
            <span class="add-on"><i class="icon-user"></i></span>
            <input  class="form-control" type="text" name="idCategoria"  placeholder="Categoria" />
        </div>

        <br/>

  <div class="form-group">
            <span class="add-on"><i class="icon-user"></i></span>
            <input  class="form-control" type="text" name="capa"  placeholder="Endereco da Imagem" />
        </div>



        <br />
        <input   type="submit" name="acao_gravar" class="btn btn-primary" value="Cadastrar dados">					
    </form>
<?php
include 'rodape.php';
?>



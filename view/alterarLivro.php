<?php

require_once '../model/Livro.php';
require_once '../controller/LivroDAO.php';

include 'menu.php';

?>
<p class="lead">
Alterar de Livro
</p>

<?php


 

if (isset($_POST['acao_alterar'])){

if (isset($_POST['titulo'])){$titulo = $_POST['titulo'];}
if (isset($_POST['descricao'])){$descricao = $_POST['descricao'];}
if (isset($_POST['statusLeitura'])){$statusLeitura = $_POST['statusLeitura'];}
if (isset($_POST['numPaginas'])){$numPaginas = $_POST['numPaginas'];}
if (isset($_POST['idCategoria'])){$idCategoria = $_POST['idCategoria'];}
if (isset($_POST['capa'])){$capa = $_POST['capa'];}
if (isset($_POST['idSelecionado'])){$idSelecionado = $_POST['idSelecionado'];}


$dao = new LivroDAO();
$dao->atualizar($idSelecionado);

}

?>
  
  <form method="post" action="">
    <div class="form-group">
          <span class="add-on"><i class="icon-user"></i></span>
          <input  class="form-control" width="300" type="text" name="titulo" value="<?php echo $titulo ?>" placeholder="titulo" />
      </div>
      <br />
      <div class="form-group">
          <span class="add-on"><i class="icon-envelope"></i></span>
          <input  class="form-control" type="text" name="descricao" value="<?php echo $descricao; ?>" placeholder="Descricao" />
      </div>
      <br />
      <select id="prio" class="custom-select" name="statusLeitura">
                  <option selected value="<?php echo $statusLeitura; ?>">Selecione o status da Leitura</option>
                  <option value="NÃO LIDO">NÃO LIDO</option>
                  <option value="LENDO">LENDO</option>
                  <option value="LIDO">LIDO</option>
              </select>
         
      <br />
      <br />
      <div class="form-group">
          <span class="add-on"><i class="icon-envelope"></i></span>
          <input  class="form-control" type="text" name="numPaginas" value="<?php echo $numPaginas; ?>" placeholder="Numero de Paginas:" />
      </div>
      <br />
      <div class="form-group">
          <span class="add-on"><i class="icon-envelope"></i></span>
          <input  class="form-control" type="text" name="idCategoria" value="<?php echo $idCategoria; ?>" placeholder="Categoria" />
      </div>
      <div class="form-group">
          <span class="add-on"><i class="icon-envelope"></i></span>
          <input  class="form-control" type="text" name="capa" value="<?php echo $capa; ?>" placeholder="Link Capa" />
      </div>

<br />
      <input type="hidden" name="idSelecionado" value="<?php echo $idSelecionado; ?>">
      <br />
      
      
      <input type="submit" name="acao_alterar" class="btn btn-primary" value="Atualizar dados" >					
      <input type="submit" name="acao_home" class="btn btn-secondary" value="Fechar" >	
  </form>




<?php

  


  


    include 'rodape.php'; ?>
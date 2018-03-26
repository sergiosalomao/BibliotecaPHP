<?php
require_once '../model/Livro.php';
require_once '../controller/LivroDAO.php';
include 'menu.php';
?>

<br>
<h4 class="display-4">Lista de Livros Cadastrados</h4>

<br>



	<?php 

$dao = new LivroDAO();

foreach ($dao->ListarTodos() as $key => $value) : ?>

	<div class="card" style="width: 100%;" >
	
  <div class="card-body">
   <table>
  
  <tr>
		  <td><img style="margin:20px" src="<?php echo $value->capa ?> " width="150px" height="200px"></td>
		<td>
   
    <td>
      <table>
      <tr>
      <h3 class="card-title"><?php echo $value->titulo ?></h3>
      </tr>
      
      <tr>
        <p class="card-text"><?php echo $value->descricao ?></p>
      </tr>

       <tr>
       <li class="list-group-item">Status Leitura: <?php echo $value->statusLeitura ?></li>
      </tr>
      <tr>
      <li class="list-group-item">Numero de Paginas: <?php echo $value->numPaginas ?></li>
      </tr>
      <tr>
      <li class="list-group-item">Categoria: <?php echo $value->id_tbCategoria ?></li>
      </tr>
      <tr>
      <li class="list-group-item">LinkCapa: <?php echo $value->capa ?></li>
      </tr>
      </table>
		</td>
  </tr>
</table>
  
  </div>
  
  
   
	  
	 
    
  
  
    
  <!--passa parametros-->
  <form method="post" action="alterarLivro.php" >
  <input   type="hidden" name="titulo" value="<?php echo $value->titulo; ?>" />
  <input   type="hidden" name="descricao" value="<?php echo $value->descricao; ?>" />
  <input   type="hidden" name="statusLeitura" value="<?php echo $value->statusLeitura; ?>" />
  <input   type="hidden" name="numPaginas" value="<?php echo $value->numPaginas; ?>" />
  <input   type="hidden" name="capa" value="<?php echo $value->capa; ?>" />
  <input   type="hidden" name="idCategoria" value="<?php echo $value->id_tbCategoria; ?>" />
  <input   type="hidden" name="idSelecionado" value="<?php echo $value->id; ?>" />
  
  <div class="card-body"> 
  <input type="submit" name="acao_alterar" class="btn btn-primary" value="Atualizar dados">
  <form method="get" action="deletaLivro.php">
    <input   type="hidden" name="idExcluir" value="<?php echo $value->id; ?>" />
    <input type="submit" name="acao_excluir" class="btn btn-danger" value="Excluir">
  </form>	
</div>


</form>



   


	  
<?php endforeach;





include 'rodape.php'

?>



</body>
</html>
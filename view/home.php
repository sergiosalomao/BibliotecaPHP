<?php
require_once '../model/Livro.php';
require_once '../controller/LivroDAO.php';
include 'menu.php';
?>

<br>

			
	<?php 
$livro = new Livro();
$dao = new LivroDAO();
 foreach ($dao->ListarTodos() as $key => $value) : ?>

	 <td><img style="margin:30px" src="<?php echo $value->capa ?>" alt="<?php echo $value->titulo; ?>" width="155px" height="220px" ></td>	
	  
<?php endforeach;

include 'rodape.php'

?>



</body>
</html>
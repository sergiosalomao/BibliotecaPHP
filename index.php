<?php
function __autoload($class_name)
{
	require_once 'model/' . $class_name . '.php';
}
?>

<!DOCTYPE HTML>
<html land="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Biblioteca Virtual</title>
  <meta name="description" content="PHP OO" />
  <meta name="robots" content="index, follow" />
   <meta name="author" content="Andrew Esteves"/>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
</head>
<body>
<br />

	<div class="container">
	
	<h3>
		Biblioteca Virtual <small class="text-muted">CRUD usando PHP OO 
		</small>
	</h3>

	<h6>Developer Sergio Salomão</h6>
	<form action="view/login.php">

		<button type="submit" class="btn btn-success btn-sm">Clique para entrar!</button>

	</form>


	</div>

<script src="js/jQuery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
<?php 
require_once '../DB/Conexao.php';
//require_once '../model/Usuario.php';
require_once '../controller/UsuarioDAO.php';

$login = $_POST["login"];
$senha = $_POST["senha"];


$dao = new UsuarioDAO($login, $senha);

if ($dao->logar($login, $senha)) {
  header("location:../view/home.php");
  
} else {
  
  header("location:../index.php");
}
?>
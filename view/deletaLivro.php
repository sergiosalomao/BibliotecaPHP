<?php

require_once '../model/Livro.php';
require_once '../controller/LivroDAO.php';
$dao = new LivroDAO();
if (isset($_GET['idExcluir'])){$id = $_GET['idExcluir'];}
$dao->deletar($id);
header("location:listaLivros.php");


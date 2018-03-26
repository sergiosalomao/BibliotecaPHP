<?php

require_once '../model/Usuario.php';
require_once '../controller/UsuarioDAO.php';

include 'menu.php';

?>
<p class="lead">
Cadastro de Usuario
</p>

<?php
if (isset($_POST['acao_gravar'])) {
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


    $livro = new Usuario();
    $livro->setNome($nome);
    $livro->setEmail($email);
    $livro->setLogin($login);
    $livro->setSenha($senha);
    $livro->setStatus($status);


    $dao = new UsuarioDAO($login, $senha);
    $dao->gravar();

}
?>

  <form method="post" action="">
        <div class="form-group">
            <span class="add-on"><i class="icon-user"></i></span>
            <input  class="form-control" type="text" name="nome"  placeholder="nome" />
        </div>
        <br />
        <div class="form-group">
            <span class="add-on"><i class="icon-envelope"></i></span>
            <input  class="form-control" type="email" name="email" placeholder="Email" />
        </div>
        <br />
 
        <div class="form-group">
            <span class="add-on"><i class="icon-user"></i></span>
            <input  class="form-control" type="text" name="login"  placeholder="Login" />
        </div>
        <br />
        <div class="form-group">
            <span class="add-on"><i class="icon-user"></i></span>
            <input  class="form-control" type="text" name="senha"  placeholder="Senha" />
        </div>

        <br/>

  
            <input  type="hidden" name="status" value="ATIVO"  />
      



        <br />
        <input   type="submit" name="acao_gravar" class="btn btn-primary" value="Cadastrar dados">					
    </form>
<?php
include 'rodape.php';
?>



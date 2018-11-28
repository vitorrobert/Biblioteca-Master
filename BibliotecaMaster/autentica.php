<?php

session_start();
if (empty($_POST['usuario']) || empty($_POST['senha'])) {
  header('Location:login.php?error=Usuário ou senha em branco');

}else {
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  // considerando que tenho a tabela usuario no banco de dados

  include 'conexao.php';
  $sql= "SELECT * FROM usuario WHERE usuario=:usuario AND senha=:senha;";
  $consulta= $con->prepare($sql);
  $consulta->bindParam(':usuario',$usuario);
  $consulta->bindParam(':senha',$senha);
  $consulta->execute();
  $registros = $consulta->fetchAll(PDO::FETCH_OBJ);
 // essa logica não depende do banco de dados

 if ($usuario == 'admin' &&  'admin' ) {
    $_SESSION["usuario_nome"] =$registros->usuario;
    $_SESSION["usuario_logado"] =true;

    header('Location:admin.php');
  }else {

    header('Location:login.php?error=Os dados não conferem!');
  }
}

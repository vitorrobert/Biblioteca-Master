<?php
session_start();
if (isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado']) {
  $logado=true;
  $mensagem = "Você está logado";
}else {
  $logado=false;
  $mensagem = "Você não está logado";
 header('Location:login.php?error=Você não está logado!');
}
$nome = $_POST['usuario'];
$idade = $_POST['senha'];
include ('conexao.php');
/* criar codigo sql */
$sql = "INSERT INTO usuario (usuario,senha)
values(:usuario,:senha)";
$inserir = $con->prepare($sql);
$inserir->bindParam(':usuario',$usuario);
$inserir->bindParam(':senha',$senha);
$resultado = $inserir->execute();
if (! $resultado) {
  var_dump($inserir->errorInfo());
  exit;
}
echo $inserir->rowCount(). " linhas";
header('Location:index_usuario.php');
 ?>

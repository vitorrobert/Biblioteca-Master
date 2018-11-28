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
$id = $_GET['id'];
include ('conexao.php');
$sql = "DELETE FROM funcionario WHERE idfuncionario=:idfuncionario;";
$deletar = $con->prepare($sql);
$deletar->bindParam(':id',$id);
$resultado = $deletar->execute();
if (! $resultado) {
  var_dump($deletar->errorInfo());
  exit;
}
echo $deletar->rowCount(). " linhas";
header('Location:index_funcionario.php');

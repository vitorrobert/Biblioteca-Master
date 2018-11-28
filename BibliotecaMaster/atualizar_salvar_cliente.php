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
$codigolivro = $_POST['codigolivro'];
$titulolivro  = $_POST['titulolivro '];
$id = $_POST['idemprestimo'];
include ('conexao.php');
$sql = "UPDATE emprestimo  SET codigolivro = :codigolivro, titulolivro = :titulolivro
WHERE idemprestimo=:id;";
$atualizar = $con->prepare($sql);
$atualizar->bindParam(':codigolivro',$codigolivro);
$atualizar->bindParam(':titulolivro',$titulolivro);
$atualizar->bindParam(':id',$id);
$resultado = $atualizar->execute();
if (! $resultado) {
  var_dump($atualizar->errorInfo());
  exit;
}
echo $atualizar->rowCount(). " linhas";
header('Location:index_emprestimo.php');
 ?>

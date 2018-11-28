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
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$id = $_POST['idfuncionario'];
include ('conexao.php');
$sql = "UPDATE funcionario  SET nome = :nome, idade = :idade
WHERE idfuncionario=:id;";
$atualizar = $con->prepare($sql);
$atualizar->bindParam(':nome',$nome);
$atualizar->bindParam(':idade',$idade);
$atualizar->bindParam(':id',$id);
$resultado = $atualizar->execute();
if (! $resultado) {
  var_dump($atualizar->errorInfo());
  exit;
}
echo $atualizar->rowCount(). " linhas";
header('Location:index_funcionario.php');
 ?>

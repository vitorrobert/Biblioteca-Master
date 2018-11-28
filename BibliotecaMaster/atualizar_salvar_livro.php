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
$data = $_POST['data'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$id = $_POST['idlivro'];
include ('conexao.php');
$sql = "UPDATE livro  SET nome = :nome, data = :data, autor = :autor, editora = :editora
WHERE idlivro=:id;";
$atualizar = $con->prepare($sql);
$atualizar->bindParam(':nome',$nome);
$atualizar->bindParam(':data',$data);
$atualizar->bindParam(':autor',$autor);
$atualizar->bindParam(':editora',$editora);
$atualizar->bindParam(':id',$id);
$resultado = $atualizar->execute();
if (! $resultado) {
  var_dump($atualizar->errorInfo());
  exit;
}
echo $atualizar->rowCount(). " linhas";
header('Location:index_livro.php');
 ?>

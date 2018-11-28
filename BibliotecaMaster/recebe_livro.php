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
$data = $_POST['date'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
include ('conexao.php');
/* criar codigo sql */
$sql = "INSERT INTO livro (nome,data,autor,editora)
values(:nome,:data,:autor,:editora)";
$inserir = $con->prepare($sql);
$inserir->bindParam(':nome',$nome);
$inserir->bindParam(':data',$data);
$inserir->bindParam(':autor',$autor);
$inserir->bindParam(':editora',$editora);
$resultado = $inserir->execute();
if (! $resultado) {
  var_dump($inserir->errorInfo());
  exit;
}
echo $inserir->rowCount(). " linhas";
header('Location:index_livro.php');
 ?>

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
include ('conexao.php');
/* criar codigo sql */
$sql = "INSERT INTO pessoa (nome,idade)
values(:nome,:idade)";
$inserir = $con->prepare($sql);
$inserir->bindParam(':nome',$nome);
$inserir->bindParam(':idade',$idade);
$resultado = $inserir->execute();
if (! $resultado) {
  var_dump($inserir->errorInfo());
  exit;
}
echo $inserir->rowCount(). " linhas";
header('Location:index_emprestimo.php');
 ?><?php
session_start();
if (isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado']) {
  $logado=true;
  $mensagem = "Você está logado";
}else {
  $logado=false;
  $mensagem = "Você não está logado";
 header('Location:login.php?error=Você não está logado!');
}
$codigolivro  = $_POST['codigolivro '];
$titulolivro = $_POST['titulolivro'];
include ('conexao.php');
/* criar codigo sql */
$sql = "INSERT INTO pessoa (codigolivro,titulolivro)
values(:codigolivro,:titulolivro)";
$inserir = $con->prepare($sql);
$inserir->bindParam(':codigolivro',$codigolivro);
$inserir->bindParam(':titulolivro',$titulolivro);
$resultado = $inserir->execute();
if (! $resultado) {
  var_dump($inserir->errorInfo());
  exit;
}
echo $inserir->rowCount(). "linhas";
header('Location:index_emprestimo.php');
 ?>

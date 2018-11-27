<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];
include ('conexao.php');
/* criar codigo sql */
$sql = "INSERT INTO cliente (nome,idade)
values(:nome,:idade)";
$inserir = $conn->prepare($sql);
$inserir->bindParam(':nome',$nome);
$inserir->bindParam(':idade',$idade);
$resultado = $inserir->execute();
if (! $resultado) {
  var_dump($inserir->errorInfo());
  exit;
}
echo $inserir->rowCount(). " linhas";
header('Location:index.php');
 ?>


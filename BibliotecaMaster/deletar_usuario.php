<?php

$id = $_GET['id'];
include ('conexao.php');
$sql = "DELETE FROM usuario WHERE idusuario=:id;";
$deletar = $con->prepare($sql);
$deletar->bindParam(':id',$id);
$resultado = $deletar->execute();
if (! $resultado) {
  var_dump($deletar->errorInfo());
  exit;
}
echo $deletar->rowCount(). " linhas";
header('Location:index_usuario.php');

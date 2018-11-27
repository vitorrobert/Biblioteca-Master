<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$id = $_POST['idpessoa'];
include ('conexao.php');
$sql = "UPDATE cliente  SET nome = :nome, idade = :idade
WHERE idcliente=:id;";
$atualizar = $conn->prepare($sql);
$atualizar->bindParam(':nome',$nome);
$atualizar->bindParam(':idade',$idade);
$atualizar->bindParam(':id',$id);
$resultado = $atualizar->execute();
if (! $resultado) {
  var_dump($atualizar->errorInfo());
  exit;
}
echo $atualizar->rowCount(). " linhas";
header('Location:index.php');
 ?>

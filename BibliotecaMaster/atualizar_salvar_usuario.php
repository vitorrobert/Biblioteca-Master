<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$id = $_POST['idusuario'];
include ('conexao.php');
$sql = "UPDATE usuario  SET usuario = :usuario, senha = :senha
WHERE idusuario=:id;";
$atualizar = $con->prepare($sql);
$atualizar->bindParam(':usuario',$usuario);
$atualizar->bindParam(':senha',$senha);
$atualizar->bindParam(':id',$id);
$resultado = $atualizar->execute();
if (! $resultado) {
  var_dump($atualizar->errorInfo());
  exit;
}
echo $atualizar->rowCount(). " linhas";
header('Location:index_usuario.php');
 ?>

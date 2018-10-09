<?php
session_start();

if (empty($_POST["user"]) || empty($_POST["senha"] )) {
  header ('location:login.php?error=Usuário e/ou senha vazios');
}else{
  $usuario = $_POST["user"];
  $senha = $_POST["senha"];
  include('conexao.php');


// buscar no BD os dados
$sql= "SELECT * FROM usuario where usuario_usu =:user and senha_usu=:senha";
$consulta = $conn->prepare($sql);
$consulta->bindParam(':user', $usuario);
$consulta->bindParam(':senha', $senha);
$consulta->execute();
$registro = $consulta->fetch(PDO::FETCH_OBJ);


  if ($usuario==$registro->usuario_usu && $senha==$registro->senha_usu) {
    $_SESSION["logado"]=true;

    $_SESSION["usuario_nome"] = $registro->usuario_usu;
    header ('location:admin.php');
  }else {
    header ('location:login.php?error=Usuário e/ou senha errados');
  }
}

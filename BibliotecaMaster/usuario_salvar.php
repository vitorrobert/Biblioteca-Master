<?php
include 'conexao.php';
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


// Criar código sql

$sql = "INSERT INTO Usuario (usuario_usu, senha_usu,(:usuario, :senha)";

$inserir = $conn->prepare($sql);
$inserir-> bindParam (':usuario', $usuario);
$inserir-> bindParam (':senha', $senha);

$resultado = $inserir->execute();

if( ! $resultado)
{
  var_dump( $inserir->errorInfo() );
  exit;
}

echo $inserir->rowCount(). "Novo usuario cadastrado";

 ?>
<a href="CadastrarUsuario.php" class="btn btn-success">Cadastrar usuario</a>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


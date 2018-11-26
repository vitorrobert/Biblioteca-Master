<?php
include 'conexao.php';
$nome = $_POST['nome'];
$data = $_POST['data'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];


// Criar código sql

$sql = "INSERT INTO livro (nome_liv, autor_liv, editora_liv, publicacao_liv) values (:nome, :autor, :editora, :data)";

$inserir = $conn->prepare($sql);
$inserir-> bindParam (':nome', $nome);
$inserir-> bindParam (':autor', $autor);
$inserir-> bindParam (':editora', $editora);
$inserir-> bindParam (':data', $data);

$resultado = $inserir->execute();

if( ! $resultado)
{
  var_dump( $inserir->errorInfo() );
  exit;
}

echo $inserir->rowCount(). "Novo livro cadastrado";

 ?>
<a href="CadastrarLivro.php" class="btn btn-success">Cadastrar livro</a>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

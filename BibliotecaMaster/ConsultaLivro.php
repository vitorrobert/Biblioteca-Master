<?php
include('conexao.php');
$titulo = "Consulta livro";

$sql = "SELECT * FROM livro;";
$consulta = $conn->prepare($sql);
$consulta->execute();

$registros = $consulta->fetchAll(PDO:: FETCH_OBJ);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title><?= $titulo ?></title>
   </head>
   <body>

<div align= "center">
    <a href="CadastrarLivro.php"class="btn btn-success"> Cadastrar Novo Livro</a>
      <a href="admin.php" class="btn btn-danger">Admin</a>
<h1>Registros de Alunos</h1>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<table class="table table-striped">
<thead class="thead-dark">
<table border="1px">
  <tr>
    <th>Cod</th>
    <th>Nome</th>
    <th>Data de Publicação</th>
    <th>Autor</th>
    <th>Editora</th>
  </tr>
</div>

  <?php foreach ($registros as $registro) { ?>
    <tr>
      <td><?php  echo $registro->cod_liv; ?></td>
      <td><?php  echo $registro->nome_liv; ?></td>
       <td><?php  echo $registro->autor_liv; ?></td>
           <td><?php  echo $registro->editora_liv; ?></td>
      <td><?php  echo $registro->publicacao_liv; ?></td>
     
  
      <td>

        <a href="atualizar_livro.php?id=<?php echo $registro->cod_alu; ?>"class="btn btn-primay">Editar</a>
        <a class="btn btn-danger" href="deletar_livro.php?id=<?php echo $registro->cod_alu;?>" target="_blank">Excluir</a>



  </td>
</tr>
<?php } ?>


  <!-- JavaScript (Opcional) -->
 <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="/js/bootstrap-confirmation.min.js" type="text/javascript"></script>

<script>
$('[data-toggle=confirmation]').confirmation({
  rootSelector: '[data-toggle=confirmation]',
  // other options
});
</script>

</body>
</html>

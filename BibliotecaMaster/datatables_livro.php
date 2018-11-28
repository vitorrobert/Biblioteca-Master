<?php
include 'conexao.php';
$sql= "SELECT * FROM livro;";
$consulta= $con->prepare($sql);
$consulta->execute();
$registros = $consulta->fetchAll(PDO::FETCH_OBJ);
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sistema em PHP</title>

    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
   </head>
   <body>

 <h1>Registros dos Livros</h1>

 <table class="table">
   <caption align="center">Registros das Livros</caption>
   <tr>
    <thead class="table-dark">
   <th> Cod.</th>
   <th> Nome</th>
   <th> Data</th>
   <th> Autor</th>
   <th> Editora</th>
   <th> Opções</th>
   </tr>
   </thead>
<?php foreach ($registros as $registro ) { ?>
  <tr>
    <td><?php echo $registro->idlivro;  ?></td>
    <td><?php echo $registro->nome;  ?></td>
    <td><?php echo $registro->data;  ?></td>
    <td><?php echo $registro->autor;  ?></td>
    <td><?php echo $registro->editora;  ?></td>
    <td>
      <a href="atualizar_livro.php?id=<?php echo $registro->idlivro;?>" class="btn btn-primary">Editar</a>
      <a class="btn btn-danger"
   href="deletar_livro.php?id=<?php echo $registro->idlivro;?>" >Deletar</a>

    </td>
  </tr>

<?php } ?>


 </table>


<script >
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<script type="text/javascript" src="DataTables/datatables.min.js"></script>
</body>
 </html>

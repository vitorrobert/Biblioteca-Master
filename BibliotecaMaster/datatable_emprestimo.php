<?php
include 'conexao.php';
$sql= "SELECT * FROM emprestimo;";
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

 <h1>Registros dos emprestimos</h1>

 <table class="table table-striped" id="example" style="width:100%">
   <caption>Registros dos emprestimos </caption>
   <tr>
    <thead class="table-dark">
   <th> Cod.</th>
   <th> codigo do livro</th>
   <th> titulo do livro</th>
   <th> Opções</th>
   </tr>
   </thead>
<?php foreach ($registros as $registro ) { ?>
  <tr>
    <td><?php echo $registro->idemprestimos;  ?></td>
    <td><?php echo $registro->codigolivro;  ?></td>
    <td><?php echo $registro->titulolivro;  ?></td>
    <td>
      <a href="atualizar_cliente.php?id=<?php echo $registro->idemprestimo;?>" class="btn btn-primary">Editar</a>
      <a class="btn btn-danger"
   href="deletar_emprestimo.php?id=<?php echo $registro->idemprestimo;?>" >Deletar</a>

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
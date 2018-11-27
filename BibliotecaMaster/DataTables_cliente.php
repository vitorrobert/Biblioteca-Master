<?php
include 'conexao.php';
$sql= "SELECT * FROM cliente;";
$consulta= $conn->prepare($sql);
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

 <h1>Registros dos clientes</h1>

 <table class="table table-striped" id="example" style="width:100%">
   <caption>Registros dos clientes</caption>
   <tr>
    <thead class="table-dark">
   <th> Cod.</th>
   <th> Nome</th>
   <th> Idade</th>
   <th> Opções</th>
   </tr>
   </thead>
<?php foreach ($registros as $registro ) { ?>
  <tr>
    <td><?php echo $registro->idcliente;  ?></td>
    <td><?php echo $registro->nome;  ?></td>
    <td><?php echo $registro->idade;  ?></td>
    <td>
      <a href="atualizar_cliente.php?id=<?php echo $registro->idcliente;?>" class="btn btn-primary">Editar</a>
      <a class="btn btn-danger"
   href="deletar_cliente.php?id=<?php echo $registro->idcliente;?>" >Deletar</a>

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
<?php
include 'conexao.php';
$sql= "SELECT * FROM funcionario;";
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

 <h1>Registros dos Funcionarios</h1>

 <table class="table table-striped" id="example" style="width:100%">
   <caption>Registros dos Funcionario</caption>
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
    <td><?php echo $registro->idfuncionario;  ?></td>
    <td><?php echo $registro->nome;  ?></td>
    <td><?php echo $registro->idade;  ?></td>
    <td>
      <a href="atualizar_funcionario.php?id=<?php echo $registro->idfuncionario;?>" class="btn btn-primary">Editar</a>
      <a class="btn btn-danger"
   href="deletar_funcionario.php?id=<?php echo $registro->idfuncionario;?>" >Deletar</a>

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

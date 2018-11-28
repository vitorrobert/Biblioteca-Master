<?php
include 'conexao.php';
$sql= "SELECT * FROM usuario;";
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

 <h1>Registros dos usuarios</h1>

 <table class="table table-striped" id="example" style="width:100%">
   <caption>Registros dos usuarios</caption>
   <tr>
    <thead class="table-dark">
   <th> Cod.</th>
   <th> Usuario</th>
   <th> Senha</th>
   <th> Opções</th>
   </tr>
   </thead>
<?php foreach ($registros as $registro ) { ?>
  <tr>
    <td><?php echo $registro->idusuario;  ?></td>
    <td><?php echo $registro->usuario;  ?></td>
    <td><?php echo $registro->senha;  ?></td>
    <td>
      <a href="atualizar_usuario.php?id=<?php echo $registro->idusuario;?>" class="btn btn-primary">Editar</a>
      <a class="btn btn-danger"
   href="deletar_usuario.php?id=<?php echo $registro->idusuario;?>" >Deletar</a>

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

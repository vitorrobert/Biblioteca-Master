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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
     <title>Sistema em PHP</title>
   </head>
   <body>
<p></p>
<p>
 <button href="#" class="btn btn-success" type="button" data-toggle="modal" data-target="#exampleModal"> Cad. New Usuario</button>
</p>
 <h1>Registros dos Usuarios</h1>

 <table class="table table-striped" id="example" style="width:100%">
   <caption>Registros dos Usuarios</caption>
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
       data-btn-ok-class="btn-primary"
       data-btn-ok-label="SIM"
       data-btn-cancel-label="NÃO!"
      data-toggle="confirmation" data-title="Tem certeza?"
   href="deletar_usuario.php?id=<?php echo $registro->idusuario;?>" target="_blank">Deletar</a>

    </td>
  </tr>

<?php } ?>


 </table>
 <p>
  <a href="logout_usuario.php" class="btn btn-danger" type="button" > Sair</a>
 </p>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Usuario</h5>

      </div>
      <div class="modal-body">
        <form method="post" action="recebe_usuario.php">
          <div class="form-group">
            <label for="Usuario">Usuario</label>
            <input type="text" class="form-control" id="usuario"
            name="usuario" placeholder="Digite o usuario">
          </div>
          <div class="form-group">
            <label for="senha">Senha</label>
            <input type="text" class="form-control" id="senha"
            name="senha"placeholder="Digite a senha">
          </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="admin.php" class="btn btn-danger">Cancelar</a>
      </div>
      </form>
    </div>
  </div>
</div>



 <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="/js/bootstrap-confirmation.min.js" type="text/javascript"></script>

     <script>
     $('[data-toggle=confirmation]').confirmation({
       rootSelector: '[data-toggle=confirmation]',
       // other options
     });
</script>
<script >
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" charset="utf-8"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" charset="utf-8"></script>

   </body>
 </html>

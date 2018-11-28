<?php
session_start();
if (isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado']) {
  $logado=true;
  $mensagem = "Você está logado";
}else {
  $logado=false;
  $mensagem = "Você não está logado";
 header('Location:login.php?error=Você não está logado!');
}
include 'conexao.php';
if (empty($_GET['id'])) {
  header('location:index_livro.php');
}else{
  $id = filter_var($_GET['id']);
  $sql= "SELECT * FROM livro WHERE idlivro=:id";
  $consulta = $con->prepare($sql);
  $consulta->bindParam(':id',$id);
  $consulta->execute();
  $registro = $consulta->fetch(PDO::FETCH_OBJ);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Atualizar</title>
  </head>
  <body>

<form method="post" action="atualizar_salvar_livro.php">
  <div class="form-group">
    <input type="hidden" name="idpessoa" value="<?php echo $registro->idpessoa;  ?>">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome"
    name="nome" value="<?php echo $registro->nome;  ?>">
    </div>

  <div class="form-group">
    <label for="data">Publicação</label>
    <input type="date" class="form-control" id="data"
    name="data" value="<?php echo $registro->data;  ?>">
  </div>

  <div class="form-group">
    <label for="autor">Autor</label>
    <input type="text" class="form-control" id="autor"
    name="autor" value="<?php echo $registro->autor;  ?>">
  </div>

  <div class="form-group">
    <label for="editora">Editora</label>
    <input type="text" class="form-control" id="editora"
    name="editora" value="<?php echo $registro->editora;  ?>">
  </div>

  <button type="submit" class="btn btn-primary">Atualizar</button>
<a href="admin.php" class="btn btn-danger">Cancelar</a>

</form>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>

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
  header('location:index_funcionario.php');
}else{
  $id = filter_var($_GET['id']);
  $sql= "SELECT * FROM funcionario WHERE idfuncionario=:id";
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

<form method="post" action="atualizar_salvar_funcionario.php">
  <div class="form-group">
    <input type="hidden" name="idfuncionario" value="<?php echo $registro->idfuncionario;  ?>">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome"
    name="nome" value="<?php echo $registro->nome;  ?>">
    </div>

  <div class="form-group">
    <label for="idade">idade</label>
    <input type="number" class="form-control" id="idade"
    name="idade" value="<?php echo $registro->idade;  ?>">
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

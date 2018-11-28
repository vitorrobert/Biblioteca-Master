<?php
session_start();
if (isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado']) {
  $logado=true;
  $mensagem = "Voc� est� logado";
}else {
  $logado=false;
  $mensagem = "Voc� n�o est� logado";
 header('Location:login.php?error=Voc� n�o est� logado!');
}
include 'conexao.php';
if (empty($_GET['id'])) {
  header('location:index_emprestimo.php');
}else{
  $id = filter_var($_GET['id']);
  $sql= "SELECT * FROM emprestimo WHERE idemprestimo=:id";
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

    <title>Atualizar emprestimo</title>
  </head>
  <body>

<form method="post" action="atualizar_salvar_emprestimo.php">
  <div class="form-group">
    <input type="hidden" name="idemprestimo" value="<?php echo $registro->idemprestimo;  ?>">
    <label for="codigolivro">c�digo do do livro</label>
    <input type="text" class="form-control" id="codigolivro"
    name="codigolivro" value="<?php echo $registro->codigolivro;  ?>">
    </div>

  <div class="form-group">
    <label for="titulolivro">titulo do livro</label>
    <input type="text" class="form-control" id="titulolivro"
    name="titulolivro" value="<?php echo $registro->titulolivro;  ?>">
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

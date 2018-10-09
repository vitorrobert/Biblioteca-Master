<?php
$titulo = "Login";
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

     <title><?= $titulo ?></title>
   </head>
   <body>
<div align="center">
  <h4>Entre na Biblioteca Master
  </h4>
</div>
     <form method="post" action="autenticar.php">
  <div class="form-group" >
    <label for="user">Name</label>
    <input type="text" class="form-control" id="user" name="user" placeholder="Name">
  </div>

   <form method="post" action="autenticar.php">
  <div class="form-group">
    <label for="senha">Password</label>
    <input type="password" class="form-control" id="senha" name="senha" placeholder="Password">
  </div>

  <?php
    if(isset($_GET["error"])) {
      echo '<div class="alert alert-danger" role="alert">';
      echo $_GET["error"];
      echo '</div>';
    }
   ?>

  <button type="submit" class="btn btn-primary">Login</button>
</form>









     <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   </body>
 </html>

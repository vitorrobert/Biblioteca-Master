<?php
$titulo = "Biblioteca Master";
session_start();
if (isset($_SESSION["logado"]) && $_SESSION["logado"]) {
$logado =true;

}



 ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
<link type="text/css" href="CSS/CSS.css" >
  <head>
    <meta charset="utf-8">
<title><?= $titulo ?></title>
  </head>
  <body>

      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
       <a class="navbar-brand" href="index.php">Biblioteca Master</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="CadastrarLivro.php" >Cadastrar Livro</a>
            <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="CadastrarCliente.php" >Cadastrar Cliente</a>
            <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="CadastrarFuncionario.php" >Cadastrar Funcionario</a>
            <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
      
        </div>
      </li>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php  echo "Bem Vindo ". $_SESSION["usuario_nome"]; ?>
          <img src="https://st2.depositphotos.com/1007566/9432/v/950/depositphotos_94328280-stock-illustration-business-people-profile.jpg" class="img-responsive" height="20" width="20">
        </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="caixa">
          <a class="dropdown-item" href="#">Ação</a>
          <a class="dropdown-item" href="#">Outra ação</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">  <div align="center">
         <a href="logout.php" class="btn btn-danger">Sair
         </a>
                  </div>
    </ul>
   
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-sm">
 
    </div>
    <div class="col-sm">
      
    </div>
    <div class="col-sm">

    </div>
  </div>
</div>
    <style type="text/css">
        #caixa{
          position:absolute;
   
    left:50%;
   
    margin-left:800px;    
        }
        #navbar{
            background-color: lightsteelblue;
        }
        body{
          background-color: lightgoldenrodyellow; 
        }
    </style>


   <!-- JavaScript (Opcional) -->
   <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  </body>
</html>

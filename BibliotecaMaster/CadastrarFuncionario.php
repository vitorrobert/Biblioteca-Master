<?php
$titulo = "Cadastro de Funcionario";
?>
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

       <form method="post" action="funcionario_salvar.php">
  <div class="form-group">
    <label for="funcionario">Funcionário</label>
    <input type="text" class="form-control" id='funcionario' name="funcionario"  placeholder="Digiteo nome do funcionário">
    


</div>
         <div>
<form method="post" action="funcionario_salvar.php">
<div class="form-group">
<label for="data">Senha</label>
<input type="password" class="form-control" id='senha' name="senha"  placeholder="Digite a senha">
</div>
    </div>
           </div>
         <div>
<form method="post" action="funcionario_salvar.php">
<div class="form-group">
<label for="data">Senha</label>
<input type="password" class="form-control" id='senha' name="senha"  placeholder="Confirmar Senha ">
</div>
    </div>
         <div>
<form method="post" action="funcionario_salvar.php">
<div class="form-group">
<label for="data">Email</label>
<input type="text" class="form-control" id='email' name="email"  placeholder="Digite o email">
</div>
    </div>
         <div>
<form method="post" action="funcionario_salvar.php">
<div class="form-group">
<label for="data">CPF</label>
<input type="text" class="form-control" id='CPF' name="CPF"  placeholder="CPF">
</div>
 <div>
<form method="post" action="funcionario_salvar.php">
<div class="form-group">
<label for="data">RG</label>
<input type="text" class="form-control" id='RG' name="RG"  placeholder="RG">
</div>
    <p>Endereço</p></br</br>
    <div>
<p>Endereço</p>
<form method="post" action="funcionario_salvar.php">
<div class="form-group">
<label for="data">Rua</label>
<input type="text" class="form-control" id='Rua' name="rua"  placeholder="Rua">
</div>
    <div>
<form method="post" action="funcionario_salvar.php">
<div class="form-group">
<label for="data">Número</label>
<input type="text" class="form-control" id='numero' name="numero"  placeholder="Digite o Número">
</div>
    <div>
<form method="post" action="funcionario_salvar.php">
<div class="form-group">
<label for="data">Bairro</label>
<input type="text" class="form-control" id='Bairro' name="Bairro"  placeholder="Digite o Bairro">
</div>
    
    <div>
<form method="post" action="funcionario_salvar.php">
<div class="form-group">
<label for="data">CEP</label>
<input type="text" class="form-control" id='CEP' name="CEP"  placeholder="Digite o CEP">
</div>
    <div>
<form method="post" action="funcionario_salvar.php">
<div class="form-group">
<label for="data">Data de entrada na empresa</label>
<input type="date" class="form-control" id='date_fun' name="date_fun"  placeholder="Digite o CEP">
</div>
    <div>
<form method="post" action="funcionario_salvar.php">
<div class="form-group">
<label for="data">Salario de inicio</label>
<input type="text" class="form-control" id='salario_in' name="salario_in"  placeholder="Digite o CEP">
</div>
    
    
   
  <button type="submit" class="btn btn-primary">Cadastrar Funcionário</button>
    <a href="consultaFuncionario.php" class="btn btn-danger">Cancelar</a>
   


</form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   </body>
 </html>

 </a>


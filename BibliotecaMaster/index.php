<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Biblioteca Master</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="alert alert-success" role="alert">
    <div align="center">
    <h4 class="alert-heading"> Bem vindo a nossa biblioteca.</h4>
    </div>
       </div>
    </head>
    <body>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    
     <form method="post" action="autenticar.php">



         <div class="form-group"  align="center"  >
     
      <div class="container" align="center">        
<div class="row" >
 <div class="col-sm">
      
    </div>
    
   
        <div class="form-group" id="centro">
            <div class="card" >
  <div class="card-body">
        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfRpNsFBuXeWPs-nVcOCEMFQnnFuQaFDa29tJO6bckXYOY8oFc2g" alt="Imagem de capa do card">
    <h5 class="card-title">Entre na Biblioteca</h5>
            <input type="text" class="form-control" id="user" name="user" placeholder="Usuario">

     

        <div class="form-group">

                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        
  <?php
    if(isset($_GET["error"])) {
      echo '<div class="alert alert-danger" role="alert">';
      echo $_GET["error"];
      echo '</div>';
    }
   ?>

  
    </div>
    <div class="col-sm">
    
    </div>

       </div>   
</form>
  </div>
</div>
   </div> 
  </div>    </div>

   
</div>
</div>


      </div>


          <style type="text/css">
             .form-control{
                 width: 400px;
                 
             }
             .alert alert-danger{
                 width: 200px;
             }
             body{
                 background-color: lightcyan;
             }
           
             .box{
       width: 300px;
         height: 300px;
       
     }
  #centro {
   
    position:absolute;
    top:50%;
    left:50%;
    margin-top:-175px;
    margin-left:-225px;
}
         </style>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>

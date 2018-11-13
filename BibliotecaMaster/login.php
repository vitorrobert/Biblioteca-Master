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
   <body >

     <form method="post" action="autenticar.php">



         <div class="form-group"  align="center"  >
     
      <div class="container" align="center">        
<div class="row" >
 <div class="col-sm">
      
    </div>
    
   
        <div class="form-group" id="centro">
            <div class="card" >
  <div class="card-body">
    <h5 class="card-title">Entre na Biblioteca</h5>
            <input type="text" class="form-control" id="user" name="user" placeholder="Name">

     

        <div class="form-group">

                <input type="password" class="form-control" id="senha" name="senha" placeholder="Password">
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
                 width: 200px;
             }
             .alert alert-danger{
                 width: 200px;
             }
             body{
                 background-image: url("https://assets.simpleviewcms.com/simpleview/image/fetch/q_75/https://res.cloudinary.com/simpleview/image/upload/crm/parkcity/books_4859503D-C558-40BD-BF8E0023F8F2E057_e34e4e7e-ce74-4db0-b76c2d6bffa12303.jpg");
             }
           
             .box{
       width: 300px;
         height: 300px;
       
     }
  #centro {
   
    position:absolute;
    top:50%;
    left:50%;
    margin-top:-50px;
    margin-left:-50px;
}
         </style>
         

     <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   </body>
 </html>

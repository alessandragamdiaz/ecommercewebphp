<?php
session_start();



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda &mdash; carmen comercio </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    
  </head>
  <body>
  
  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?>
	<form action="./php/emailcheckolvidar.php" method="post">

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded" role="alert">
             Ya estas registrado? <a href="login.php">Click here</a> Para Ingresar
            </div>
          </div>
        </div>
        <div class="row">
		
          <div class="col-md-6 mb-5 mb-md-0">
			  
		     <?php 
            if(isset($_GET['nexist'])){
          ?>
            <div class="alert alert-danger" role="alert">
            Este email no esta registrado
            </div>

          <?php  }?>
			  
			      <?php 
            if(isset($_GET['enviado'])){
          ?>
            <div class="alert alert-success" role="alert">
             Email enviado!
            </div>

          <?php  }?>
            <h2 class="h3 mb-3 text-black">Ingresa tu email </h2>
            <div class="p-3 p-lg-5 border">
             
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">email <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                </div>
             
              </div>
				
			
              </div>


              <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" type="submit"> Recuperar cuenta</button>
                  </div>

          

          

            </div>
          </div>
      
		
        </div>
        <!-- </form> -->
      </div>
    </div>
 </form>
    <?php include("./layouts/footer.php"); ?> 
  </div>
	  

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
	   

   
    
  </body>

</html>
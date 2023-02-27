<?php
session_start();
include "./php/conexion.php";

if(isset($_GET['id_venta'])){
	include "./php/conexion.php";
	



$respuesta2 = $conexion ->query("select * from pagos where id_venta=".$_GET['id_venta'] )or die($conexion->error);
$datos4 = mysqli_fetch_row($respuesta2);


	
								  
$totalP = $datos4[4];

$pago = $datos4[1];
$delivery = $datos4[3];
	
$id_venta = $_GET['id_venta'];


	
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Tienda</title>
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

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Gracias Por su compra!</h2>
            <p class="lead mb-5">Su orden ha sido completada con exito</p>
            <p><a href="order.php?id_venta=<?php echo $_GET['id_venta']; ?>&pago=<?php echo $pago; ?>&delivery=<?php echo $delivery; ?>" class="btn btn-sm btn-prim ary">Ver orden</a></p>
          </div>
        </div>
      </div>
    </div>

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

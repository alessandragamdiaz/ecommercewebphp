<?php
session_start();
include "./php/conexion.php";





	

	   
	

	
	
	
	$respuesta2 = $conexion ->query("select * from pagos where id_venta=".$_GET['id_venta'] )or die($conexion->error);
	$datos4 = mysqli_fetch_row($respuesta2);

if($datos4 > 0 ){
	
								  
$totalP = $datos4[4];
$dolar = $datos4[4] / 210;	
	
	
	
	
	
}else{
	
	
	header("Location: ./pagar.php?id_venta=".$_GET['id_venta']);
	
}
	
	
	



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Proceso de Pago</title>
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
	<div class="p-4 border mb-3"  id="pagos"  style="text-align: center">
		
		
                  <div class="border p-3 mb-5">
                    <h3 class="h6 mb-0"><a class="d-block buy-now btn btn-sm btn-primary" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal(Pagar en dolares) </a></h3>

                    <div class="collapse" id="collapsepaypal">
						 <div class="form-group">
                    <div id="paypal-button-container"></div>
                  </div>
                  
                    </div>
					
                  </div>  
				
				
			 <div class="border p-3 mb-5">
			
                    <h3 class="h6 mb-0"><a class="d-block buy-now btn btn-sm btn-primary" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Tranferencia bancaria</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2"  class="form-group">
                        <p class="mb-0" > enviar tu  orden de compra  a  admin@comerciomayorista.com.ar y se le enviara los datos correctos para realizar el pago .  <div class="form-group">
                   <a href="./php/thank1.php?id_venta=<?php echo $_GET['id_venta']?>&pago=transferencia" style="color: white;"> <button class="btn btn-primary btn-lg py-3 btn-block">ENVIAR</button></a>
                  </div>
                      </div>
                    
                  </div> 
					
					
				  
				 </div>
			  
			  
		 <div class="border p-3 mb-5">
			 <button class="buy-now btn btn-sm btn-primary" style="text-align: center; width: 100%;">
              
<?php include('./pagar2.php') ?>
			 
			 </button>
			 
           
					
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
	   
    <script src="https://www.paypal.com/sdk/js?client-id=AT_muBM92Udg5DimOuGpnn7oGTbS6VNeZQI8d3w_YrpB4_xE-Uj4xOHi6xmOzFcwDdjpMEniPrBjQDl4&currency=USD"></script>

    <script>

        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({
					

			
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
						
                        amount: {
                            value: '<?php echo  number_format((float)$dolar, 2, '.', '') ?>'
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
					if(details.status == 'COMPLETED'){
						
						location.href="./php/thank1.php?id_venta=<? echo $_GET['id_venta']?>&pago=paypal"
						
					}
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }


        }).render('#paypal-button-container');
    </script>  



   
    
  </body>

</html>

<?php
session_start();
include "./php/conexion.php";

if(!isset($_GET['id_venta'])){
	
	header("Location: ./");
	
}
$datos = $conexion->query("select
                          ventas.*,
                          usuario.nombre,
						  usuario.telefono,usuario.email
						  from ventas
						  inner join usuario on ventas.id_usuario = usuario.id
						  where ventas.id=".$_GET['id_venta'])or die($conexion->error);
$datosUsuario = mysqli_fetch_row($datos);
$datos2 = $conexion->query("select * from shipping where id_venta=".$_GET['id_venta'])or die($conexion->error);
$datosEnvio = mysqli_fetch_row($datos2);

$datos3 =  $conexion->query("select  productos_venta.*,
                                  productos.nombre as nombre_productos, productos.imagen,productos.talla,productos.color
								  from productos_venta inner join productos on productos_venta.id_producto = productos.id
								  where id_venta=".$_GET['id_venta'])or die($conexion->error);

$totalP = $datosUsuario[2];
$dolar = $datosUsuario[2] / 219 ;

	$respuesta2 = $conexion ->query("select * from pagos where id_venta=".$_GET['id_venta'] )or die($conexion->error);
	$datos4 = mysqli_fetch_row($respuesta2);

if($datos4 > 0 ){
	
								  
$totalP = $datos4[4];
$dolar = $datos4[4] / 210;	
	
	
	
	
	
}
				  



 ?>
<!DOCTYPE html>
<html>
<head>
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
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">DETALLES DE COMPRA</h2>
          </div>
          <div class="col-md-7">

          
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black" id="id_venta" data-id="<?php echo $_GET['id_venta']; ?>">Numero de Venta :<?php echo $_GET['id_venta'];          ?> </label>
                 
                  </div>
                  
                </div>
				     <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Nombre :<?php echo $datosUsuario[7];  ?> </label>
                 
                  </div>
                  
                </div>
				     <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Email :<?php echo $datosUsuario[9]; ?> </label>
                 
                  </div>
                  
                </div>
			<div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Telefono :<?php echo $datosUsuario[8];  ?> </label>
                 </div>
                  
             </div>
				  	<div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Compañia: <?php echo $datosEnvio[2];  ?> </label>
                 </div>
                  
             </div>
				  	<div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Direccion: <?php echo $datosEnvio[3];?>,
						<?php echo $datosEnvio[6];?></label>
					  
                 </div>
                  
             </div>
				  	<div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Estado:<?php echo $datosEnvio[4];  ?> </label>
                 </div>
                  
             </div>
			
				  	<div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Postal :<?php echo $datosEnvio[5];  ?> </label>
                 </div>
                  
             </div>
				    	<div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Pais :<?php echo $datosEnvio[1];  ?> </label>
                 </div>
                  
             </div>
				  
      
                
              </div>
           
          </div>
          <div class="col-md-5 ml-auto">
			  
			  
			  
			  <?php 
			  while($f = mysqli_fetch_array($datos3)){
			  ?>
            <div class="p-4 border mb-3">
				<img src="./images/<?php echo $f['imagen']; ?>" width="50px"/>
              <span class="d-block text-primary h6 text-uppercase"><?php echo $f['nombre_productos'];  ?></span>
		     <span class="d-block text-primary h6 text-uppercase">Cantidad:<?php echo $f['cantidad'];  ?></span>
			 <span class="d-block text-primary h6 text-uppercase">Precio: $<?php echo $f['precio'];  ?></span>
				<span class="d-block text-primary h6 text-uppercase">Talla: <?php echo $f['talla'];  ?></span>
				<span class="d-block text-primary h6 text-uppercase">Color: <?php echo $f['color'];  ?></span>
				 <span class="d-block text-primary h6 text-uppercase">Sub total:$<?php echo $f['subtotal'];  ?></span>
            </div>
            <?php } ?>
			 	<form action="test.php?id_venta=<?php echo $_GET['id_venta']?>" method="post">
			     <label for="c_fname"  id="id_venta" data-id="<?php echo $_GET['id_venta']; ?>" style="display:none;">Numero de Venta :<?php echo $_GET['id_venta'];          ?> </label>
	            <select  id="metodo" style=" background-color: black;  color: white;" width="280%"  name="metodo"  class="form-control">
				    <option value="mercadopago">MercadoPago</option>
				   <option value="paypal">Paypal</option>
				   <option value="tranferencia">Tranferencia</option>
				 
				
				  </select>
			  
			  <select  id="deli" style=" background-color: black;  color: white;" width="280%"  name="deli"  class="form-control">
		           <option value="0">Retiro</option>
				  <option value="100">Moto delivery</option>
				  <option value="250">correo central</option>
				   <option value="270">OCA</option>
				  <option value="500">DLR Internacional</option>
				
				  </select>
				    <div class="p-4 border mb-3" style="font-weight: 100;"> 

			  <h5 data-price ="<?php echo $datosUsuario[2]; ?>"  id="totalprice">Subtotal + IVA : $ <?php echo $datosUsuario[2];  ?></h5>
			  <h5 id="final"></h5>
			<h5 id="total" class="form-group"></h5>
					</div>
			   <button class="buy-now btn btn-sm btn-primary" style="text-align: center; width: 100%; display: none;" type="submit">
              
PAGAR
			 
			 </button>
		</form>
		
			  	
		
			  
			  

			  
			  
		  </div>
			
			
		


  </div>

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
<script>

$(document).ready(function(){

	
	
	
	$(function(){
		
	$("#deli").change(function(){
		
		var metodo = $("#metodo option:selected").val();
	   var id_venta = $("#id_venta").data('id');

		
		var envio1 = $("#deli option:selected").val();
		 var totalpagar ="";
		 var dolar ="";
	
		var total = $("#totalprice").data('price');
		
		totalpagar = parseFloat(envio1) + parseFloat(total);
		
	
			$("#final").text("Envio: $"+envio1); 
		  $(".buy-now").show(); 
		$("#total1").show();
		
	
		
		  $.ajax({
			url:"./php/formadepago.php",
			  data:{
				metodo : metodo,
			  totalp:totalpagar,
			  envio: envio1,
			id_venta: id_venta
			  
			    },
				 method:'POST'
			  
			  
		}).done(function(respuesta){
			  
			  
			  if(respuesta == "insertado" || respuesta == "actualizado"){
				  
				
		$("#total").text("Total : $"+totalpagar); 
				
				  

				  
				  
			  }
		
		  });
		

		
		
		
	});
		
		
		
	
	
	
});
		
});


</script>


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

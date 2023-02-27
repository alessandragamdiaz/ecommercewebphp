<?php
session_start();
include("./php/conexion.php");
if(!isset($_SESSION['basket'])){
	
header('Location:./index.php');
}

$arreglo = $_SESSION['basket'];
$arreglo2 = $_SESSION['datos_login'];


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda &mdash;Carmen comercio mayorista</title>
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
	  <style>
@media screen and (max-width: 400px) {
 #paypal-button-container {
 width: 100%;
 }
}

@media screen and (min-width: 400px) {
 #paypal-button-container {
 width: 250px;
 }
}
</style>
    
  </head>
  <body>
  
  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?>
	<form action="./php/insertarpedido.php" method="post">

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded" role="alert">
              Ya te registraste <a href="login1.php">Click aqui</a> para Ingresar
            </div>
          </div>
        </div>
        <div class="row">
		
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Detalles de recibo</h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group">
                <label for="c_country" class="text-black">Pais <span class="text-danger">*</span></label>
                <select id="c_country" class="form-control" name="country">
                
                    <option value="Argentina">Argentina</option>
                  <option value="Colombia">Colombia</option>    
                    <option value="Peru">Peru</option>  
					<option value="Ecuador">Ecuador</option>  
					<option value="Chile">Chile</option>  
					<option value="Bolivia">Bolivia</option>
					<option value="Reino unido">Reino unido</option>
					<option value="Espeña">España</option>
					
                </select>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_fname">
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Apellido <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="c_lname">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_companyname" class="text-black"> Nombre de tu Compañia </label>
                  <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Direccion <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
                </div>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)" id="c_aparment" name="c_aparment">
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black">Estado/ Pais <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">C.P / postal <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Email  <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="c_email_address" name="c_email_address">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Celular <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                </div>
              </div>

              <div class="form-group">
                <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> Crear cuenta</label>
                <div class="collapse" id="create_an_account">
                  <div class="py-2">
                    <p class="mb-3">Crea una cuenta ingresando tu contrasena , si ya te has registrado porfavor ingrese haciendo click arriba en ingresar.</p>
                    <div class="form-group">
                      <label for="c_account_password" class="text-black">Contrseña</label>
                      <input type="password" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
                    </div>
                  </div>
                </div>
              </div>


              <div class="form-group">
                <label for="c_ship_different_address" class="text-black" data-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Enviar a una direccion diferente</label>
                <div class="collapse" id="ship_different_address">
                  <div class="py-2">

                 <div class="form-group">
                <label for="c_country2" class="text-black">Pais <span class="text-danger">*</span></label>
                <select id="c_country2" class="form-control" name="c_country2">
                  
                    <option value="Argentina">Argentina</option>
                  <option value="Colombia">Colombia</option>    
                  <option value="Peru">Peru</option>  
					<option value="Ecuador">Ecuador</option>  
					<option value="Chile">Chile</option>  
					<option value="Bolivia">Bolivia</option>
					<option value="Reino unido">Reino unido</option>
					<option value="Espeña">España</option>
					
                </select>
              </div>


                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="c_diff_fname" class="text-black">Nombre<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
                      </div>
                      <div class="col-md-6">
                        <label for="c_diff_lname" class="text-black">Apellido <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="c_diff_companyname" class="text-black">Nombre de compañía </label>
                        <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="c_diff_address" class="text-black">Direccion <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_address" name="c_diff_address" placeholder="Street address">
                      </div>
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                    </div>

                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="c_diff_state_country" class="text-black">Estado/ Pais <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_state_country" name="c_diff_state_country">
                      </div>
                      <div class="col-md-6">
                        <label for="c_diff_postal_zip" class="text-black">cod / postal <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_postal_zip" name="c_diff_postal_zip">
                      </div>
                    </div>

                    <div class="form-group row mb-5">
                      <div class="col-md-6">
                        <label for="c_diff_email_address" class="text-black">Email  <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address">
                      </div>
                      <div class="col-md-6">
                        <label for="c_diff_phone" class="text-black">Telefono <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone" placeholder="Phone Number">
                      </div>
                    </div>

                  </div>

                </div>
              </div>

              <div class="form-group">
                <label for="c_order_notes" class="text-black">Notas</label>
                <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
              </div>

            </div>
          </div>
          <div class="col-md-6">

            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Coupon codigo</h2>
                <div class="p-3 p-lg-5 border">
                  
                  <label for="c_code" class="text-black mb-3">Inserta numero de cupon si tienes uno </label>
                  <div class="input-group w-75" id ="formCupon">
                    <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Aplicar</button>
						
                    </div>
					
                  </div>
				  
					  <h4 id="error" style = "display:none">   cupon no valido!</h5>
					  <h4 id="cupon" style = "display:none">   Este cupon ya ha sido utilizado!</h5>
					
					  	<div class="input-group w-75" id ="datosCupon"></div>
					  <h4 id="textoCupon" >  </h5>
					
					

                </div>
              </div>
            </div>
			  
	
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Tu compra</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Producto</th>
                      <th>Precio</th>
						 <th>cantidad</th>
                    </thead>
                    <tbody>
						<?php
						$total = 0;
						$total1 = 0;
						for($i=0;$i<count($arreglo);$i++){
						$total = $total + ($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad']);
							$totalQ = $totalQ + $arreglo[$i]['Cantidad'];
							
							$total1 =  $total ;
					
						?>
                      <tr>
                        <td><?php echo $arreglo[$i]['Nombre'];?></td>
                        <td>$<?php echo number_format($arreglo[$i]['Precio'],2,'.','');  ?></td>
						  <td> <?php echo $arreglo[$i]['Cantidad'];?>           </td>
						</tr>
                    
						<?php 
						}
						?>
						
						  <tr>
                        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                        <td class="text-black">$<?php echo number_format($total,2,'.','');  ?></td>
					    <td><?php echo $totalQ;  ?></td>
                      </tr>
							  <tr>
                        <td class="text-black font-weight-bold"><strong>IVA %</strong></td>
                        <td class="text-black">	Inc. </td>
					    <td>   </td>
                      </tr>
						
							  <tr>
                        <td class="text-black font-weight-bold"><strong>Descuento</strong></td>
                        <td class="text-black" id="descuento"></td>
					    <td>   </td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong> Total de compra</strong></td>
						 
                        <td class="text-black font-weight-bold" id="totalfinal"><strong>$<?php echo number_format($total1,2,'.','');  ?></strong></td>
						   
                      </tr>
                    </tbody>
					</table>
					<div id="totalcompra" style="display: none;"><?php echo $total1;  ?></div>
					
					<input type="number" class="form-control text-center" value="0" name="cupon" id="cupon"  style="display: none" >
					<input type="number" class="form-control text-center" value="0" name="id_cupon" id="id_cupon"  style="display: none" >
			    
					

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" type="submit">Comprar</button>
                  </div>

                </div>
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
	  
	  <script>
	$(document).ready(function(){
		  
		  $("#button-addon2").click(function(){
									
			var codigo = $("#c_code").val();
		  $.ajax({
			url:"./php/validarcodigo.php",
			  data:{
			  codigo:codigo
			  
			    },
				 method:'POST'
			  
			  
		}).done(function(respuesta){
			  
			  
			  if(respuesta == "error" || respuesta == "codigo no valido"){
				  
				  $("#error").show();
				  setTimeout(function() { $("#error").hide(); }, 5000);
				  
				  
				  
				  
			  } else if(respuesta == "utilizado"){
				  
				  
				  $("#cupon").show();
				  setTimeout(function() { $("#cupon").hide(); }, 5000);
				  
			  }else {
				  
				  var arreglo = JSON.parse(respuesta);
				  var total = $("#totalcompra").text();
				  
				  var total1 = total - arreglo.valor;
				if(arreglo.tipo == "moneda"){
					
					
					$("#textoCupon").text("Usted tiene un decuesto de"+arreglo.valor+"$ pesos en su compra");
				$("#descuento").text(arreglo.valor+"$");
					$("#totalfinal").text("$"+total1);
						$("#cupon").val(arreglo.valor);
					  $("#id_cupon").val(arreglo.codigo);
					
					
				}else{
					
					
					$("#textoCupon").text("Usted tiene un decuesto de"+arreglo.valor+"% en su compra");
					
					
				}
				 $("#datosCupon").show();
				  $("#formCupon").hide();
				  
				  
				  
				  
			  }
			  
		  })
		  
		  
		  
		  
	  });
		
		$("#c_code").keyup(function(){
			$("#error").hide();
			
		});
									
									
									
	 
		  
 });
	  
	
	  
	  
	  </script>
	  
	

   
    
  </body>

</html>

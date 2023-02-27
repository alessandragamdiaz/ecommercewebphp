<?php
session_start();
include("./php/conexion.php");


if(isset($_SESSION['basket'])){

	if(isset($_GET['id'])){
		
		$arreglo =$_SESSION['basket'];
		$encontro=false;
		$numero=0;
		for($i=0;$i<count($arreglo);$i++){
			
			if($arreglo[$i]['Id'] == $_GET['id']){
			
				$encontro=true;
				$numero=$i;
				
				
			}
			
		}
		if($encontro == true ){
			
			if($arreglo[$i]['Precio'] != $_GET['price']){
				
				echo '<script language="javascript">';
echo 'alert("Solo puede comprar una opcion del mismo producto, por bulto o pack ,pero no al mismo tiempo.")';
echo '</script>';
				
				
			}else{
		
			$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+ $_GET['qty'];
			$_SESSION['basket']=$arreglo;
			header("Location: ./cart.php");
			}
				
			
		
			
		}else {
			
		$nombre =" ";
		$precio =" ";
		$imagen =" ";
		$talla = "";
		$color = "";
		$res = $conexion->query('select * from productos where id='.$_GET['id'])or die($conexion-> error);
		$fila = mysqli_fetch_row($res);
		$nombre = $fila[1];
		$precio = $_GET['price'];
		$imagen = $fila[4];
		$talla = $fila[7];
		$color = $fila[8];
	    
		$arreglonuevo = array(
		            'Id' => $_GET['id'],
			        'Nombre' => $nombre,
			        'Precio' => $precio,
			        'Imagen' => $imagen,
			         'Talla' => $talla,
			        'Color' => $color,
			        'Cantidad' => $_GET['qty']
			         );
			array_push($arreglo,$arreglonuevo);
			$_SESSION['basket']=$arreglo;
			header("Location: ./cart.php");
			
		}
		
	}
	 
	
}else{
	
	if(isset($_GET['id'])){
		
		$nombre =" ";
		$precio =" ";
		$imagen =" ";
		$talla = "";
		$color = "";
		$res = $conexion->query('select * from productos where id='.$_GET['id'])or die($conexion-> error);
		$fila = mysqli_fetch_row($res);
		$nombre = $fila[1];
		$precio = $_GET['price'];
		$imagen = $fila[4];
		$talla = $fila[7];
		$color = $fila[8];
		$arreglo[]= array(
		            'Id' => $_GET['id'],
			        'Nombre' => $nombre,
			        'Precio' => $precio,
			        'Imagen' => $imagen,
			         'Talla' => $talla,
			        'Color' => $color,
			        'Cantidad' => $_GET['qty']
			         );
		
		            $_SESSION['basket']=$arreglo;
		            header("Location: ./cart.php");
		
		
		
	                  }
	

     }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda </title>
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
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Imagen</th>
                    <th class="product-name">Producto</th>
					 <th class="product-talla">Tamaño</th>
					 <th class="product-color">Color</th>
					<th class="product-price">Precio  </th>
                    <th class="product-quantity">Cantidad</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
					
                  </tr>
                </thead>
                <tbody>
					<?php
					$total =0;
					$total1 = 0;
					 if(isset($_SESSION['basket'])){
						 
						 $basketdisplay = $_SESSION['basket'];
						 for($i=0;$i<count($basketdisplay);$i++){
							 $total = $total + ($basketdisplay[$i]['Precio'] * $basketdisplay[$i]['Cantidad']);
							 $total1 =  $total ;
				     ?>
                  <tr>
                   <td class="product-thumbnail">
                      <img src="images/<?php echo $basketdisplay[$i]['Imagen']; ?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $basketdisplay[$i]['Nombre']; ?></h2>
                    </td>
					  <td> <h2 class="h5 text-black"><?php echo $basketdisplay[$i]['Talla']; ?></h2></td>
					  <td> <h2 class="h5 text-black"><?php echo $basketdisplay[$i]['Color']; ?></h2></td>
                    <td>$ <?php echo $basketdisplay[$i]['Precio']; ?></td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus btnIncrementar" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center txtCantidad"
							   data-precio="<?php echo $basketdisplay[$i]['Precio']; ?>" 
							   data-id="<?php echo $basketdisplay[$i]['Id']; ?>"
							   value="<?php echo $basketdisplay[$i]['Cantidad']; ?>"
							   placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus btnIncrementar" type="button">&plus;</button>
                        </div>
                      </div> 

                    </td>
                    <td class="cant<?php echo $basketdisplay[$i]['Id']; ?>">$ <?php echo $basketdisplay[$i]['Precio'] * $basketdisplay[$i]['Cantidad']; ?></td>
                    <td><a href="#" class="btn btn-primary btn-sm btnEliminar" data-id="<?php echo $basketdisplay[$i]['Id']; ?>">X</a></td>
					  
                  </tr>

               
					   <?php } } ?>
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <a class="btn btn-primary btn-sm btn-block" href="./cart.php">Actualizar carrito</a>
              </div>
              <div class="col-md-6">
                <a class="btn btn-outline-primary btn-sm btn-block" href="index2.php">seguir de Shopping</a>
              </div>
            </div>
       
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
              <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Total de Compra</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$<?php echo $total; ?></strong>
                  </div>
                </div>
				   <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">VAT %</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"> Incluido</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$<?php echo $total1; ?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Proceder a Pagar</button>
                  </div>
                </div>
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
		  $(".btnEliminar").click(function(event){
		   event.preventDefault();
		  var id = $(this).data('id');
			var bottom = $(this);
		  
			  $.ajax({
				  method:'POST',
				  url:'./php/eliminarcarrito2.php',
	             data:{
				    id:id
			        }
				  }).done(function(respuesta){
				  
			      bottom.parent('td').parent('tr').remove();
	 
			  });  
	 
			   
	       });
		  $(".txtCantidad").keyup(function(){
			  
			  
			 var cantidad = $(this).val(); 
			 var precio = $(this).data('precio');
			 var id = $(this).data('id');
			 incrementar(cantidad,precio,id);
			  
			  
			  
			  
		  });
		  $(".btnIncrementar").click(function(){
		    var precio = $(this).parent('div').parent('div').find('input').data('precio');
			var id =  $(this).parent('div').parent('div').find('input').data('id');  
			var cantidad =  $(this).parent('div').parent('div').find('input').val();
			incrementar(cantidad,precio,id);
			});
		    function incrementar(cantidad,precio,id){
		     var mult = parseFloat(cantidad)* parseFloat(precio);
				
				if(cantidad > 0){
				
			  $(".cant"+id).text("$"+mult);  
					
				}else{
					
					
					$(".cant"+id).text("$"+0);  
					
					
				}
					
					
					
					
	          $.ajax({
				 method:'POST',
				 url:'./php/actulizar.php',
	             data:{
				    id:id,
					cantidad:cantidad
			        }
				}).done(function(respuesta){
	 
			  }); 
				
		  }
	    });
	  
	  
	  </script>
    
  </body>
</html>
<?php
session_start();
include("./php/conexion.php");


if(!isset($_SESSION['datos_login'])){
	if(!isset($_GET['id'])){
	
	
	
	
	
	

	    echo "<script> alert('Porfavor ingrese a su cuenta');window.location='./index.php' </script>";
	
	
}else{
		
		
header("Location: ./shop-single.php?id=".$_GET['id']."&&error= Porfavor ingrese a su cuenta");
		
		
	}
	
	
	
	
}else{



if(isset($_SESSION['favoritos'])){

	if(isset($_GET['id'])){
		
		$arreglo =$_SESSION['favoritos'];
		$encontro=false;
		$numero=0;
		for($i=0;$i<count($arreglo);$i++){
			
			if($arreglo[$i]['Id'] == $_GET['id']){
			
				$encontro=true;
				$numero=$i;
				
				
			}
			
		}
		if($encontro == true){
			
			$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+ 1;
			$_SESSION['favoritos']=$arreglo;
			header("Location: ./favoritelist.php");
		
			
		}else {
			
		$nombre =" ";
		$precio =" ";
		$imagen =" ";
		$res = $conexion->query('select * from productos where id='.$_GET['id'])or die($conexion-> error);
		$fila = mysqli_fetch_row($res);
		$nombre = $fila[1];
		$precio = $fila[3];
		$imagen = $fila[4];
		$arreglonuevo = array(
		            'Id' => $_GET['id'],
			        'Nombre' => $nombre,
			        'Precio' => $precio,
			        'Imagen' => $imagen,
			       
			         );
			array_push($arreglo,$arreglonuevo);
			$_SESSION['favoritos']=$arreglo;
			header("Location: ./favoritelist.php");
			
		}
		
	}
	 
	
}else{
	
	if(isset($_GET['id'])){
		
		$nombre ="";
		$precio ="";
		$imagen ="";
		$res = $conexion->query('select * from productos where id='.$_GET['id'])or die($conexion-> error);
		$fila = mysqli_fetch_row($res);
		$nombre = $fila[1];
		$precio = $fila[3];
		$imagen = $fila[4];
		$arreglo[]= array(
		            'Id' => $_GET['id'],
			        'Nombre' => $nombre,
			        'Precio' => $precio,
			        'Imagen' => $imagen,
			    
			         );
		
		            $_SESSION['favoritos']=$arreglo;
		            header("Location: ./favoritelist.php");
		
		
		
	                  }
	

     }
	
}

?>

  <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Favorite </title>
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
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
					  <th class="product-price">Price</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
					<?php
					$total =0;
					 if(isset($_SESSION['favoritos'])){
						 
						 $favoritosdisplay = $_SESSION['favoritos'];
						 for($i=0;$i<count($favoritosdisplay);$i++){
							 $total = $total + ($favoritosdisplay[$i]['Precio'] * $favoritosdisplay[$i]['Cantidad']);
				     ?>
                  <tr>
                   <td class="product-thumbnail">
                      <img src="images/<?php echo $favoritosdisplay[$i]['Imagen']; ?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                     <a href="shop-single.php?id=<?php echo $favoritosdisplay[$i]['Id'];?>"> <h2 class="h5 text-black"><?php echo $favoritosdisplay[$i]['Nombre']; ?></h2></a>
                    </td>
                    <td>$ <?php echo $favoritosdisplay[$i]['Precio']; ?></td>
                 
                  
                    <td><a href="#" class="btn btn-primary btn-sm btnEliminar" data-id="<?php echo $favoritosdisplay[$i]['Id']; ?>">X</a></td>
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
                <a class="btn btn-primary btn-sm btn-block" href="./favoritelist.php">Update list</a>
              </div>
              <div class="col-md-6">
                <a class="btn btn-outline-primary btn-sm btn-block" href="index2.php">Continue Shopping</a>
              </div>
            </div>
        
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
              <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
					  <?php
					$total = 0;
					 if(isset($_SESSION['basket'])){
						 
						 $basketdisplay = $_SESSION['basket'];
					
							 $total = $total + ($basketdisplay[$i]['Precio'] * $basketdisplay[$i]['Cantidad']);
					 }
				     ?>
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
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
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$<?php echo $total; ?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Proceed To Checkout</button>
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
				  url:'./php/eliminarfav.php',
	             data:{
				    id:id
			        }
				  }).done(function(respuesta){
				  
			      bottom.parent('td').parent('tr').remove();
	 
			  });  
	       });
	
		 
	    });
	  
	  
	  </script>
    
  </body>
</html>




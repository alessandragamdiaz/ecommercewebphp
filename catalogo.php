
<?php
session_start();
include("./php/conexion.php");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tienda - Carmen comercio</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Libreria y papeleria por mayor" name="keywords">
        <meta content="Cintas hojas cuadernos libreria" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

       

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="./lib/slick/slick.css" rel="stylesheet">
        <link href="./lib/slick/slick-theme.css" rel="stylesheet">


        <link href="css1/style.css" rel="stylesheet">
		
				
    <link rel="stylesheet" href="fonts/icomoon/style.css">
		
		 <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/magnific-popup.css">
    <link rel="stylesheet" href="./css/jquery-ui.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
	  


    <link rel="stylesheet" href="./css/aos.css">

    <link rel="stylesheet" href="./css/style.css">
    </head>
	<style>
	@media (min-width: 1200px) {
  div{
    font-size: 20px;
  }
}
/* If the screen size is smaller than 1200px, set the font-size to 80px */
@media (max-width: 1199.98px) {
 div{
    font-size: 10px;
  }
}
	
	
	</style>
	
	

    <body>
		
		<div>
			<h1 style="text-align: center;">CATALOGO UTILES ESCOLARES</h1>
			<nav style="  text-align: center;
 
  overflow: hidden;">
<a href="#filgo">FILGO</a> |
<a href="#faber">FABERCASTEL</a> |
<a href="#exito">EXITO</a> |
<a href="#gloria">GLORIA</a>
<a href="#laprida">laprida</a>
			</nav></div>


		
			<h1 style="text-align: center;"> EXITO PAPEL </h1>
		
				<?php 
				$resultado = $conexion ->query("select distinct numR from categoria1")or die ($conexion -> error);
		
		
		
		
			while($fila2 = mysqli_fetch_array($resultado)){
					
				$resultado2 = $conexion ->query("select * from categoria1 where numR =".$fila2[0])or die ($conexion -> error);
					
					$fila = mysqli_fetch_array($resultado2)
		?>
		
  
 <div class="container" style="border-radius: 10%;
  border: 2px solid #000000">
  <div class="row" id="<?php echo $fila['nombre'];?>">

        
    <div class="col">
   <p style="font-size:80%;">Numero ref:<?php echo $fila['numR'];?></p>
		            <a href="shop-single.php?id=<?php echo $fila['id'];?>">
						 <img class="img-fluid"src="images/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>" style=" max-width: 80%; border-radius: 10%;"></a>
    </div>
    <div class="col" style="background-color: darkgray; color: black; border-radius: 10%;">
     
		
		<div class="container">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <div class="row">
    <div class="col-md-8" style="font-weight: bold;">Nombre :<p id="catname"><?php echo $fila['nombre'];?></p></div>
	  	

  </div>

  <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
  <div class="row">
    <div class="col-6 col-md-4"><b>precio por menor </b>
		 <div class="col-sm" style="font-weight: bold;">$<?php echo $fila['precioM'];?></div>
    <div class="col-sm" style="font-weight: bold;">cantidad:<?php echo $fila['cantU'];?> Art.</div>
    
   
  </div>
    <div class="col-6 col-md-4"><b>precio compra pack</b>
	  
	    <div class="row">
			   <div class="col-sm" style="font-weight: bold;">$<?php echo $fila['precioP'];?></div>
    <div class="col-sm" style="font-weight: bold;">cantidad en pack:<?php echo $fila['cantP'];?>unidades </div>
  
 
  </div></div>
	  
	      <div class="col-6 col-md-4"><b>precio por unidad</b>
	  
	    <div class="row">
			   <div class="col-sm" style="font-weight: bold;">$<?php echo $fila['cantB'];?></div>
    <div class="col-sm" style="font-weight: bold;">cantidad:1 unidad </div>
  
 
  </div></div>
 
  </div>

  <!-- Columns are always 50% wide, on mobile and desktop -->
  <div class="row">
   
    <div class="col-6" style="font-weight: bold;">descripcion :</div>
  </div>
</div> 
    </div>
  </div>
 
  </div>
<br><br>
      <?php } ?> 
		  <script>
			  function changeID(){
		const catname = document.getElementsById("catname");
			
			if (catname.includes('gloria'))
				{
				
				var e = document.getElementById("exito");
                  e.id = "gloria";

			  } 
			  }

		
		</script>
        

   
     
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="./lib/easing/easing.min.js"></script>
        <script src="./lib/slick/slick.min.js"></script>
		  <script src="js/aos.js"></script>
		  <script src="./js/jquery-ui.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/owl.carousel.min.js"></script>
  <script src="./js/jquery.magnific-popup.min.js"></script>
        
     
        <script src="./js/main2.js"></script>
		
		
		


    </body>
</html>

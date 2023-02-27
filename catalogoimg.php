
<?php
session_start();
include("./php/conexion.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Tienda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    	

  </head>

<style>
	
	.box img {
    width: 100%;
    height: 100%;
	

	
}

.box1 img {
	
    object-fit: cover;
}

	.cover1{
	
		padding: 0;
		margin: 0;
		border: 0;
		
	}
    

</style>

	
  <body>
	  	
	  
	<div class="row">
		
		<?php 
				$resultado = $conexion ->query("select distinct numR from categoria1")or die ($conexion -> error);
		
		
		
		
			while($fila2 = mysqli_fetch_array($resultado)){
					
				$resultado2 = $conexion ->query("select * from categoria1 where numR =".$fila2[0])or die ($conexion -> error);
					
					$fila = mysqli_fetch_array($resultado2)
		?>
  <div class="col-12 col-md-8 box box1 cover1" style="background-color: black;">          <a href="shop-single.php?id=<?php echo $fila['id'];?>">
						 <img src="images/ledesma/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>"></a></div>
	
		
  <div class="col-6 col-md-4 box box1 cover1" style="background-color: pink;">        <a href="shop-single.php?id=<?php echo $fila['id'];?>">
						 <img src="images/ledesma/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>"></a></div>
		 
		
</div>
	  
 
<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">
  <div class="col-6 col-md-4 box box1 cover1">    <a href="shop-single.php?id=<?php echo $fila['id'];?>">
						 <img src="images/ledesma/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>"></a></div>
  <div class="col-6 col-md-4 box box1 cover1">    <a href="shop-single.php?id=<?php echo $fila['id'];?>">
						 <img src="images/ledesma/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>"></a></div>
  <div class="col-6 col-md-4 box box1 cover1">    <a href="shop-single.php?id=<?php echo $fila['id'];?>">
						 <img src="images/ledesma/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>"></a></div>
</div>

<!-- Columns are always 50% wide, on mobile and desktop -->
<div class="row">
  <div class="col-6 box box1 cover1">    <a href="shop-single.php?id=<?php echo $fila['id'];?>">
						 <img src="images/ledesma/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>"></a></div>
  <div class="col-6 box box1 cover1">    <a href="shop-single.php?id=<?php echo $fila['id'];?>">
						 <img src="images/ledesma/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>"></a></div>
</div>
<?php } ?>
	    <script src="js/bootstrap.min.js"></script>
	
    
  </body>

</html>


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
        <meta content="papeleria - libreria - Utiles escolares" name="keywords">
        <meta content="Productos directo de fabrica" name="description">

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
	
	

    <body>
    <?php include("./layouts/header.php"); ?>   
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="index2.php">Productos</a></li>
                    <li class="breadcrumb-item active">Lista de productos</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                        
													<?php
				
		
				$limite = 12;
				$totalquery = $conexion->query('select distinct id_nombre from productos')or die($conexion->error);
				$totalProducts = mysqli_num_rows($totalquery);
				$totalButtons = round($totalProducts/$limite);
				if(isset($_GET['limite'])){
				
					
					
					$resultado = $conexion ->query("select distinct id_nombre from productos  limit ".$_GET['limite'].",".$limite)or die ($conexion -> error);
				
					
				}else{
					
					
					$resultado = $conexion ->query("select distinct id_nombre from productos   limit ".$limite)or die ($conexion -> error);
						
				}
				
	
				while($fila2 = mysqli_fetch_array($resultado)){
					
				$resultado2 = $conexion ->query("select * from productos  where id_nombre = '".$fila2[0]."'")or die ($conexion -> error);
					
					$fila = mysqli_fetch_array($resultado2)

			
			?>	
							
		
							
							<div class="col-md-4">
								 <div class="product-item">
                     <div class="block-4 text-center border" >
                       <figure class="product-image"  style="   object-fit: cover;
 ">
                         <a href="shop-single.php?id=<?php echo $fila['id'];?>">
						 <img src="images/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>" class="imagenP" style=" min-height: 205px;
    min-width: auto;
    width: auto;
    height: 205px;
"></a>
						   
						     <div class="product-action">
                                    <a  href="shop-single.php?id=<?php echo $fila['id'];?>" ><i class="fa fa-cart-plus"></i></a>
                                    <a href="favoritelist.php?id=<?php echo $fila['id'];?>" ><i class="fa fa-heart"></i></a>
                                    <a  href="shop-single.php?id=<?php echo $fila['id'];?>"><i class="fa fa-search"></i></a>
                                </div>
                        </figure>
                       <div class="block-4-text p-4" >
						   <div class="row">
  <div class="col-sm-8" style="   object-fit: cover;
 ">
	  
	<b style="font-weight: lighter;
"><a href="shop-single.php?id=<?php echo $fila['id'];?>"><?php echo $fila['nombre'];?></a></b>
	</div>
							   
  <div class="col-sm-4">
	  
	  <?php 
					if($fila['precioUnitario'] == 0 ){
						
						?>
				
			 <p class="font-weight-bold" style="color:black; font-size: 170%;">$<?php echo $fila['precio'];?></p>
				<?php
				
				
						
					}else {
						
						?>
						
				 <p class="font-weight-bold" style="color:black;">$<?php echo $fila['precioUnitario'];?></p>
						
						
						<?php
					}
				
				?>
	  
	
</div>
</div>
<div class="row">
	 <div class="col-sm-8"> 
  <p><a href="shop-single.php?id=<?php echo $fila['id'];?>" class="btn btn-primary btn-sm" style="width: 100%; height: 100%; padding: 3px">COMPRAR</a></p>
	</div>
	 <div class="col-sm-4">
		 

		 </div>
</div>

                        </div>
                     </div>
                    
                          
							 </div>
							
							</div>
							
								 <?php } ?> 
                            
                        </div>
                        
                        <!-- Pagination Start -->
						 
                  
						         <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                
                <?php
					  
					  if(isset($_GET['limite'])){
						  
						  if($_GET['limite']>0){
							  
							 echo '<li><a href="index2.php?limite='.($_GET['limite']-12).'">&lt;</a></li>';
							  
						  }
						  
						  
					  }
					  
					  
					  
					  for($k=0;$k<$totalButtons;$k++){
						  
						  echo  '<li><a href="index2.php?limite='.($k*12).'">'.($k+1).'</a></li>';
					  }
					    if(isset($_GET['limite'])){
						  
						  if($_GET['limite']+12 < $totalButtons*12 ){
							  
							 echo '<li><a href="index2.php?limite='.($_GET['limite']+12).'">&gt;</a></li>';
							  
						  }
						  
						  
					  }else{
							  
							  echo '<li><a href="index2.php?limite=10">&gt;</a></li>'; 
							  
							  
						  }
					?>
                
                  </ul>
                </div>
              </div>
            </div>
						
                        <!-- Pagination Start -->
                    </div>           
                    
                    <!-- Side Bar Start -->
                    <div class="col-lg-4 sidebar">
						
						<aside class="sidebar-widget">
		<form action="fetch_data.php" method="POST">
		
<div class="card">
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Categoria</h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_1" style="">
		<div class="card-body">
						<label class="custom-control custom-checkbox">
				  <input type="checkbox"  class="radio"  name="typo"  value="7">
				  <div class="custom-control-label">Technologia
				  	<b class="badge badge-pill badge-light float-right">120</b>  </div>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="checkbox"  class="radio"  name="typo"  value="5">
				  <div class="custom-control-label">Juegueteria
				  	<b class="badge badge-pill badge-light float-right">15</b>  </div>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="checkbox"  class="radio"  name="typo"  value="4" >
				  <div class="custom-control-label">Libreria
				  	<b class="badge badge-pill badge-light float-right">35</b> </div>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="checkbox"  class="radio"  name="typo" value="2" >
				  <div class="custom-control-label">Gorras 
				  	<b class="badge badge-pill badge-light float-right">89</b> </div>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="checkbox"  class="radio"  name="typo"  value="1">
				  <div class="custom-control-label">Ropa
				  	<b class="badge badge-pill badge-light float-right">30</b>  </div>
				</label>
			<label class="custom-control custom-checkbox">
				  <input type="checkbox"  class="radio"  name="typo"  value="6">
				  <div class="custom-control-label">accsesorios
				  	<b class="badge badge-pill badge-light float-right">30</b>  </div>
				</label>
	</div>
		</div>
	</article> <!-- filter-group  .// -->
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="false" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Marcas </h6>
			</a>
		</header>
		<div class="filter-content collapse in" id="collapse_2" style="">
			<div class="card-body">
				<label class="custom-control custom-checkbox">
				  <input type="checkbox"  class="radio"  name="marca"  value="faber">
				  <div class="custom-control-label">Faber Castel 
				  	<b class="badge badge-pill badge-light float-right">120</b>  </div>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="checkbox"  class="radio"  name="marca" value="filgo" >
				  <div class="custom-control-label">Filgo
				  	<b class="badge badge-pill badge-light float-right">15</b>  </div>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="checkbox"  class="radio"  name="marca"  value="gema"  >
				  <div class="custom-control-label">Gema
				  	<b class="badge badge-pill badge-light float-right">35</b> </div>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="checkbox"  class="radio"  name="marca"  value="exito"  >
				  <div class="custom-control-label">Exito 
				  	<b class="badge badge-pill badge-light float-right">89</b> </div>
				</label>
				<label class="custom-control custom-checkbox">
				  <input type="checkbox"  class="radio"  name="marca"  value="rivadavia">
				  <div class="custom-control-label">Rivadavia 
				  	<b class="badge badge-pill badge-light float-right">30</b>  </div>
				</label>
	</div> <!-- card-body.// -->
		</div>
	</article> <!-- filter-group .// -->
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="false" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Precio Rango </h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_3" style="">
			<div class="card-body">
				<input type="range"  class="custom-range" min="0" max="100" name="">
				<div class="form-row">
				<div class="form-group col-md-6">
				  <label>Min</label>
				  <input  type="number" name="preciomin"  placeholder="$0">
				</div>
				<div class="form-group text-right col-md-6">
				  <label>Max</label>
				  <input  type="number" name="preciomax" placeholder="$1,0000">
				</div>
				</div> <!-- form-row.// -->
				
			</div><!-- card-body.// -->
		</div>
	</article> <!-- filter-group .// -->
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_4" aria-expanded="false" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Talla </h6>
			</a>
		</header>
		<div class="filter-content collapse in" id="collapse_4" style="">
			<div class="card-body">
			  <label class="checkbox-btn">
			    <input type="checkbox"  class="radio"  name="talla" value="s">
			    <span class="btn btn-light"> S </span>
			  </label>

			  <label class="checkbox-btn">
			    <input  type="checkbox"  class="radio"  name="talla"  value="m">
			    <span class="btn btn-light"> M </span>
			  </label>

			  <label class="checkbox-btn">
			    <input  type="checkbox"  class="radio"  name="talla" value="l">
			    <span class="btn btn-light"> L </span>
			  </label>

			  <label class="checkbox-btn">
			    <input  type="checkbox"  class="radio"  name="talla" value="xxl">
			    <span class="btn btn-light"> XXL </span>
			  </label>
		</div><!-- card-body.// -->
		</div>
	</article> <!-- filter-group .// -->
		<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Color </h6>
			</a>
		</header>
		<div class="filter-content collapse in" id="collapse_5" style="">
			<div class="card-body">
			  <label class="checkbox-btn">
			    <input type="checkbox"  class="radio"  name="color" value="rojo">
			    <span class="btn btn-light"> Rojo </span>
			  </label>

			  <label class="checkbox-btn">
			    <input  type="checkbox"  class="radio"  name="color"  value="blanco">
			    <span class="btn btn-light"> Blanco </span>
			  </label>

			  <label class="checkbox-btn">
			    <input  type="checkbox"  class="radio"  name="color" value="negro">
			    <span class="btn btn-light"> Negro </span>
			  </label>

			  <label class="checkbox-btn">
			    <input  type="checkbox"  class="radio"  name="color" value="marron">
			    <span class="btn btn-light"> Marron </span>
			  </label>
				
			  <label class="checkbox-btn">
			    <input  type="checkbox"  class="radio"  name="color" value="multicolor">
			    <span class="btn btn-light"> multicolor </span>
			  </label>
		</div><!-- card-body.// -->
		</div>
	</article> <!-- filter-group .// -->
	 <!-- filter-group .// -->
	
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_6" aria-expanded="false" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Genero </h6>
			</a>
		</header>
		<div class="filter-content collapse in" id="collapse_6" style="">
			<div class="card-body">
			  <label class="checkbox-btn">
			    <input type="checkbox"  class="radio"  name="catego" value="hombres">
			    <span class="btn btn-light"> Hombres </span>
			  </label>

			  <label class="checkbox-btn">
			    <input  type="checkbox"  class="radio"  name="catego"  value="mujeres">
			    <span class="btn btn-light"> Mujeres </span>
			  </label>

			  <label class="checkbox-btn">
			    <input  type="checkbox"  class="radio"  name="catego" value="ninos">
			    <span class="btn btn-light"> niños </span>
			  </label>

			  <label class="checkbox-btn">
			    <input  type="checkbox"  class="radio"  name="catego" value="ninas">
			    <span class="btn btn-light"> niñas </span>
			  </label>
		</div><!-- card-body.// -->
		</div>
	</article>
	
	
		
</div> <!-- card.// -->
	<button class="btn btn-block btn-primary"  class="form-control" type="submit" >Aplicar</button>
								
								</form>
							
								<button class="btn btn-block btn-primary" ><a href="./index4.php" style="color:white;">Quitar filtros </a></button>

	</aside>
                        <div class="sidebar-widget category">
                            <h2 class="title">Category</h2>
                            <nav class="navbar bg-light">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="./fetch_data.php?text=fashion"><i class="fa fa-female"></i>Fashion & Beauty</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./fetch_data.php?text=infantil"><i class="fa fa-child"></i>Niños & Bebes Ropa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./fetch_data.php?text=hombres"><i class="fa fa-tshirt"></i>Hombres & Mujeres Ropa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./fetch_data.php?text=accessorios"><i class="fa fa-mobile-alt"></i>Electronica & Accessorios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./fetch_data.php?text=libreria"><i class="fa fa-microchip"></i>Libreria & Papeleria POR MAYOR</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        
                        <div class="sidebar-widget widget-slider">
                            <div class="sidebar-slider normal-slider">
											<?php
				
			
				$limite = 10;
					$acesorios = 4;
			
			
					
			  $resultado = $conexion ->query("
    select * from productos where id_categoria =".$acesorios." limit ".$limite)or die($conexion->error);
					
			
				
	
				while($fila = mysqli_fetch_array($resultado)){
			
			?>	
                               
								 <div class="product-item">
                     <div class="block-4 text-center border" >
                       <figure class="product-image"  style="   object-fit: cover;
 ">
                         <a href="shop-single.php?id=<?php echo $fila['id'];?>">
						 <img src="images/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>" style="    min-height: 205px;
    min-width: auto;
    width: auto;
    height: 205px;
"></a>
						   
						     <div class="product-action">
                                    <a  href="shop-single.php?id=<?php echo $fila['id'];?>" ><i class="fa fa-cart-plus"></i></a>
                                    <a href="favoritelist.php?id=<?php echo $fila['id'];?>" ><i class="fa fa-heart"></i></a>
                                    <a  href="shop-single.php?id=<?php echo $fila['id'];?>"><i class="fa fa-search"></i></a>
                                </div>
                        </figure>
                       <div class="block-4-text p-4" >
						   <div class="row">
  <div class="col-sm-8" style="   object-fit: cover;
 ">
	  
	<b style="  width: 10vw;
  height: 10vw; font-weight: lighter;
"><a href="shop-single.php?id=<?php echo $fila['id'];?>"><?php echo $fila['nombre'];?></a></b>
	</div>
							   
  <div class="col-sm-4">
	  
	  
	  <?php 
					if($fila['precioUnitario'] == 0 ){
						
						?>
				
			 <p class="font-weight-bold" style="color:black; font-size: 150%;">$<?php echo $fila['precio'];?></p>
				<?php
				
				
						
					}else {
						
						?>
						
				 <p class="font-weight-bold" style="color:black; font-size: 150%;">$<?php echo $fila['precioUnitario'];?></p>
						
						
						<?php
					}
				
				?>
	  
</div>
</div>
<div class="row">
	 <div class="col-sm-8"> 
  <p><a href="shop-single.php?id=<?php echo $fila['id'];?>" class="btn btn-primary btn-sm" style="width: 100%; height: 100%; padding: 3px">COMPRAR</a></p>
	</div>
	 <div class="col-sm-4">
		 

		 </div>
</div>

                        </div>
                     </div>
                    
                          
							 </div>
							
						
								<?php } ?> 
                              
                            </div>
                        </div>
                        
                        <div class="sidebar-widget brands">
                            <h2 class="title">Our Brands</h2>
                            <ul>
                                <li><a href="./fetch_data.php?text=FILGO">Filgo</a><span>(45)</span></li>
                                <li><a href="./fetch_data.php?text=exito">Exito </a><span>(34)</span></li>
                                <li><a href="./fetch_data.php?text=meli">Meli</a><span>(67)</span></li>
                                <li><a href="./fetch_data.php?text=UTIL UNO">Util uno</a><span>(74)</span></li>
                                <li><a href="./fetch_data.php?text=meek">Meek </a><span>(89)</span></li>
                                <li><a href="./fetch_data.php?text=faber castel">Faber Castel</a><span>(28)</span></li>
                            </ul>
                        </div>
                        
                       <div class="sidebar-widget tag">
                            <h2 class="title">TAGS</h2>
                            <a href="./fetch_data.php?text=film">Film</a>
                            <a href="./fetch_data.php?text=hojas">Hojas</a>
                            <a href="./fetch_data.php?text=escolar">Escolar</a>
                            <a href="./fetch_data.php?text=libreria">Libreria</a>
                            <a href="./fetch_data.php?text=gorra">Gorra</a>
                            <a href="./fetch_data.php?text=gorras">Gorras</a>
                            <a href="./fetch_data.php?text=remeras">Remeras</a>
                            <a href="./fetch_data.php?text=snapback">Snapback</a>
                            <a href="./fetch_data.php?text=cinta adhesiva">Cinta Adhesiva</a>
                            <a href="./fetch_data.php?text=adhesivos">Adhesivos</a>
                            <a href="./fetch_data.php?text=plastico">Plastico</a>
						     <a href="./fetch_data.php?text=cintas">cintas</a>
                        </div>
                    </div>
                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Product List End -->  
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->
        
       <?php include("./layouts/footer.php"); ?>  
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
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
		<script src="./js/main.js"></script>
		
		
		
		<script>
$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
</script>

    </body>
</html>

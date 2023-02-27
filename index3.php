<?php
session_start();
include("./php/conexion.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tienda Carmen comercio</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

     

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">
		  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/magnific-popup.css">
    <link rel="stylesheet" href="./css/jquery-ui.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
	  


    <link rel="stylesheet" href="./css/aos.css">

    <link rel="stylesheet" href="./css/style.css">

        <!-- Template Stylesheet -->
        <link href="css1/style.css" rel="stylesheet">
		<style>
		  
* {box-sizing: border-box;}
.slides2 {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
.imag1{vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text1 {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text1 {font-size: 11px}
}
	
	.responsive {
  max-width: 100%;
  height: auto;
}
	
	.image1 {  width: 100%;
  height: 400px;
  background-image: url('images/slogan.png');
  background-repeat: no-repeat;
  background-size: contain;
		border: 1px solid white;}
	  
</style>
    </head>

    <body>
      <?php include("./layouts/header.php"); ?>   
<div class="slides2">
		  

<div class="slideshow-container" style="margin-left: 0;" >

<div class="mySlides fade" style="   object-fit: cover;
 ">
  <div class="numbertext">1 / 3</div>
  <img  class="imag1" src="images/todoback.png" style="margin-left: 0; width:150%">
  <div class="text1">Caption Text</div>
</div>

<div class="mySlides fade" style="   object-fit: cover;
 ">
  <div class="numbertext">2 / 3</div>
  <img class="imag1" src="images/porback.png" style="width:150%">
  <div class="text1">Caption Two</div>
</div>

<div class="mySlides fade" style="   object-fit: cover;
 ">
  <div class="numbertext">3 / 3</div>
  <img class="imag1"  src="images/Mayorback.png"style="width:150%">
  <div class="text1">Caption Three</div>
</div>

</div>


<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
	  
	  
	  
	  
	  </div>
        
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-home"></i>Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-shopping-bag"></i>Mas Vendidos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>Recien Llegados</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-female"></i>Fashion & Beauty</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-child"></i>Niños & Juguetes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Hombre & Mujer Ropa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Papeleria& Utileria</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Libreria </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-6">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img src="images/winniepho.png" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Some text goes here that describes the image</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="images/winniepho.png" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Some text goes here that describes the image</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>
                            <div class="header-slider-item">
                                <img src="images/winniepho.png" alt="Slider Image" />
                                <div class="header-slider-caption">
                                    <p>Some text goes here that describes the image</p>
                                    <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="img/category-1.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="img/category-2.jpg" />
                                <a class="img-text" href="">
                                    <p>Some text goes here that describes the image</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
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
        
        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Pagos Seguros</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Envios </h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>15 dias Retornos</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>24/7 Soporte</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur elit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->      
        
        <!-- Category Start-->
        <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-3.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-250">
                            <img src="img/category-4.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                        <div class="category-item ch-150">
                            <img src="img/category-5.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-150">
                            <img src="img/category-6.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                        <div class="category-item ch-250">
                            <img src="img/category-7.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-8.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>Preguntas</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0123456789">+54112560976728</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
        
        <!-- Featured Product Start -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Acsessorios</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
						<?php
				
			
				$limite = 15;
					$acesorios = 2;
			
			
					
			  $resultado = $conexion ->query("
    select * from productos where id_categoria =".$acesorios." limit ".$limite)or die($conexion->error);
					
			
				
	
				while($fila = mysqli_fetch_array($resultado)){
			
			?>	
        
                    <div class="col-lg-3" style=" mim-height: 100%;
 ">
                       <div class="product-item">
                     <div class="block-4 text-center border" >
                       <figure class="product-image"  style="   object-fit: cover;
 ">
                         <a href="shop-single.php?id=<?php echo $fila['id'];?>">
						 <img src="images/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>" class="img-fluid" style="  width: 20vw;
  height: 20vw;
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
	  
	 <p class="font-weight-bold" style="color:black; font-size: 200%;">$<?php echo $fila['precioM'];?></p>
</div>
</div>
<div class="row">
	 <div class="col-sm-8"> 
  <p><a href="shop-single.php?id=<?php echo $fila['id'];?>" class="btn btn-primary btn-sm" style="width: 100%; height: 100%; padding: 3px; background-color: black; color:white;">COMPRAR</a></p>
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
        </div>
        <!-- Featured Product End -->       
        
        <!-- Newsletter Start -->
        <div class="newsletter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h1>SUBSCRIBITE AQUI</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                                      <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup" style="background-color:#335577;">
<form action="https://gmail.us6.list-manage.com/subscribe/post?u=212b0b127908996ddb54be140&amp;id=3950278e7c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" style="color: #335577;" novalidate>
    <div id="mc_embed_signup_scroll" >

	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_212b0b127908996ddb54be140_3950278e7c" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="background-color:black;"> ></div>
    </div>
</form>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->  
			
        <!-- Recent Product Start -->
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Libreria</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4" style="display:flex; height: 70%">
						<?php
				
			
				$limite = 10;
					$acesorios = 4;
			
			
					
			  $resultado = $conexion ->query("
    select * from productos where id_categoria =".$acesorios." limit ".$limite)or die($conexion->error);
					
			
				
	
				while($fila = mysqli_fetch_array($resultado)){
			
			?>	
        
                    <div class="col-lg-3">
					
						
						
					<div class="product-item">
                     <div class="block-4 text-center border" >
                       <figure class="product-image"  style="   object-fit: cover;
 ">
                         <a href="shop-single.php?id=<?php echo $fila['id'];?>">
						 <img src="images/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>" class="img-fluid" style="  width: 20vw;
  height: 20vw;
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
	  
	 <p class="font-weight-bold" style="color:black; font-size: 200%;">$<?php echo $fila['precioM'];?></p>
</div>
</div>
<div class="row">
	 <div class="col-sm-8"> 
  <p><a href="shop-single.php?id=<?php echo $fila['id'];?>" class="btn btn-primary btn-sm" style="width: 100%; height: 100%; padding: 3px; background-color: black; color: white;">COMPRAR</a></p>
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
            </div>
        </div>
        <!-- Recent Product End -->
	
        
        <!-- Review Start -->
        <div class="review">
            <div class="container-fluid">
                <div class="row align-items-center review-slider normal-slider">
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/review-1.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/review-2.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="img/review-3.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Review End -->        
        
   <?php include("./layouts/footer.php"); ?>     
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
			  <script src="js/jquery-3.3.1.min.js"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
	
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  
        <script src="./js/main2.js"></script>
		<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
    </body>
</html>

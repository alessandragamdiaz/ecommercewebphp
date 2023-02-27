<?php
session_start();
include("./php/conexion.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda &mdash; Carmen comercio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   <meta content="Libreria y papeleria por mayor" name="keywords">
        <meta content="Cintas hojas cuadernos libreria" name="description">

  
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/magnific-popup.css">
    <link rel="stylesheet" href="./css/jquery-ui.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
	  


    <link rel="stylesheet" href="./css/aos.css">

    <link rel="stylesheet" href="./css/style.css">
	  <link rel="stylesheet" href="https://rawcdn.githack.com/SochavaAG/example-mycode/master/_common/css/reset.css">
	  	  <link rel="stylesheet" href="https://raw.githack.com/SochavaAG/example-mycode/master/pens/slider-slick/plugins/slick/slick.css">
	   <link rel="stylesheet" href="https://raw.githack.com/SochavaAG/example-mycode/master/pens/slider-slick/plugins/slick/slick-theme.css">

	   
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
<style>
	  
.ag-format-container {
  width: 1142px;
  margin: 0 auto;
}


.ag-vacancy-block {
  padding: 0px 0;

  overflow: hidden;

  position: relative;
}
.ag-vacancy-block:before {
  content: "";
  height: 100%;
  width: 1900px;
  background: -webkit-radial-gradient(50% 50%, 50% 50%,#f8f9fa 0%, rgba(248, 249, 250) 100%);
  background: -moz-radial-gradient(50% 50%, 50% 50%,#f8f9fa 0%, rgba(248, 249, 250) 100%);
  background: -o-radial-gradient(50% 50%, 50% 50%,#f8f9fa 0%, rgba(248, 249, 250) 100%);
  background: radial-gradient(50% 50% at 50% 50%,#f8f9fa 0%, rgba(248, 249, 250) 100%);

  z-index: 1;
  position: absolute;
  top: 50%;
  right: 0;

  -webkit-transform: translateY(-50%) translateX(34%);
  -moz-transform: translateY(-50%) translateX(34%);
  -ms-transform: translateY(-50%) translateX(34%);
  -o-transform: translateY(-50%) translateX(34%);
  transform: translateY(-50%) translateX(34%);
}
.ag-vacancy-block:after {
  content: "";
  height: 100%;
  width: 1900px;
  background: -webkit-radial-gradient(50% 50%, 50% 50%,#f8f9fa 0%, rgba(248, 249, 250) 100%);
  background: -moz-radial-gradient(50% 50%, 50% 50%,#f8f9fa 0%, rgba(248, 249, 250) 100%);
  background: -o-radial-gradient(50% 50%, 50% 50%,#f8f9fa 0%, rgba(248, 249, 250) 100%);
  background: radial-gradient(50% 50% at 50% 50%,#f8f9fa 0%, rgba(248, 249, 250) 100%);

  z-index: 1;
  position: absolute;
  top: 50%;
  left: 0;

  -webkit-transform: translateY(-50%) translateX(-34%);
  -moz-transform: translateY(-50%) translateX(-34%);
  -ms-transform: translateY(-50%) translateX(-34%);
  -o-transform: translateY(-50%) translateX(-34%);
  transform: translateY(-50%) translateX(-34%);
}
.ag-vacancy_content {
  min-height: 46vh;

  overflow: hidden;

  z-index: 10;
  position: relative;
}
.ag-vacancy_box {
  width: calc(100% - 455px);
  padding-left: 120px;

  position: relative;
}
.ag-vacancy_list {
  display: none;
}
.ag-vacancy_item {
  min-height: 500px;
  width: 360px;
  margin-right: 35px;
  padding: 50px 40px;
  background: rgba(255, 255, 255, .37);

  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  border-radius: 30px;

  -webkit-transition: background .3s, -webkit-transform .3s;
  -moz-transition: background .3s, -moz-transform .3s;
  -o-transition: background .3s, -o-transform .3s;
  transition: background .3s, transform .3s, -webkit-transform .3s, -moz-transform .3s, -o-transform .3s;

  position: relative;
}
.ag-vacancy_item:hover {
  background: rgba(255, 255, 255, .5);
}
.ag-vacancy_icon {
  margin-bottom: 20px;
}
.ag-vacancy_img {
  width: 80px;
  height: 80px;

  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  border-radius: 15px;
}
.ag-vacancy_name {
  line-height: 35px;
  margin-bottom: 12px;

  font-weight: 900;
  font-size: 30px;
  color: #191F3D;
}
.ag-vacancy_descr {
  margin-bottom: 40px;

  font-size: 20px;
  color: #232C51;
}
.ag-vacancy_text__strong {
  padding: 0 15px 0 0;

  font-weight: 900;
  color: #418ee2;
}
.ag-vacancy_btn {
  display: inline-block;
  padding: 25px 65px;
  background: #eff2f5;

  cursor: pointer;

  font-weight: 600;
  font-size: 18px;
  color: #191F3D;

  position: absolute;
  bottom: 50px;
  left: 40px;

  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  border-radius: 15px;

  -webkit-transition: .3s;
  -moz-transition: .3s;
  -o-transition: .3s;
  transition: .3s;
}
.ag-vacancy_btn:hover {
  background: #191F3D;

  text-decoration: none;
  color: #FFF;
}
.js-ag-vacancy_arrow {
  height: 100px;
  line-height: 100px;
  width: 100px;
  background: rgba(105, 130, 255, .11);

  cursor: pointer;

  opacity: 0;

  text-align: center;

  z-index: 30;
  position: absolute;
  top: 50%;

  -webkit-backdrop-filter: blur(4px);
  backdrop-filter: blur(4px);

  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;

  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  -moz-transition: 0.3s;
  transition: 0.3s;
}
.js-ag-vacancy_arrow:hover {
  background: rgba(105, 130, 255, .2);

  -webkit-backdrop-filter: blur(6px);
  backdrop-filter: blur(6px);
}
.ag-vacancy_box:hover .js-ag-vacancy_arrow {
  opacity: 1;
}
.ag-vacancy_box:hover .js-ag-vacancy_arrow__hide {
  opacity: 0;
}
.js-ag-vacancy_arrow__prev {
  left: 0;

  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}
.js-ag-vacancy_arrow__next {
  right: -80px;

  -webkit-transform: translate(50%, -50%);
  -moz-transform: translate(50%, -50%);
  -ms-transform: translate(50%, -50%);
  -o-transform: translate(50%, -50%);
  transform: translate(50%, -50%);
}
.js-ag-vacancy_img-arrow__prev {
  margin: 0 0 0 -5px;
}
.js-ag-vacancy_img-arrow__next {
  margin: 0 -5px 0 0;
}

/* slick */
.slick-list {
  overflow: visible !important;
}
.slick-initialized {
  display: block;
}
.slick-slide {
  opacity: 0.5;

  -webkit-filter: blur(5px);
  filter: blur(5px);

  -webkit-transform: scale(.9);
  -moz-transform: scale(.9);
  -ms-transform: scale(.9);
  -o-transform: scale(.9);
  transform: scale(.9);
}
.slick-active {
  -webkit-filter: blur(0);
  filter: blur(0);

  opacity: 1;

  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}
/* /slick */


@media (max-width: 1600px) {
  .ag-vacancy_box {
    width: calc(100% - 400px);
  }
  .ag-vacancy_item {
    min-height: 390px;
  }
  .ag-vacancy_name {
    line-height: 30px;

    font-size: 25px;
  }
  .ag-vacancy_descr {
    margin-bottom: 30px;
  }
  .ag-vacancy_btn {
    padding: 22px 50px;
  }
}

@media (max-width: 1500px) {
  .ag-vacancy_box {
    padding-left: 70px;
  }
  .ag-vacancy_item {
    min-height: 375px;
    width: 320px;
    margin-right: 25px;
    padding: 25px 30px;
  }
  .ag-vacancy_btn {
    background: #eff2f5;

    position: absolute;
    left: 25px;
    bottom: 40px;
  }

  .js-ag-vacancy_arrow {
    height: 80px;
    line-height: 80px;
    width: 80px;
  }
  .js-ag-vacancy_arrow__next {
    right: 0;
  }
}

@media only screen and (max-width: 767px) {
  .ag-format-container {
    width: 96%;
  }

  .ag-vacancy_box {
    width: 100%;
    padding-left: 0;
  }
  .ag-vacancy_item {
    width: 260px;
    min-height: 375px;
    padding: 25px 17px;
    margin-right: 15px;
  }
  .ag-vacancy_name {
    font-size: 22px;
    line-height: 26px;
  }
  .ag-vacancy_descr {
    font-size: 17px;
  }
  .ag-vacancy_text__strong {
    padding-right: 5px;
  }
  .ag-vacancy_btn {
    padding: 20px 30px;

    font-size: 16px;

    left: 15px;
  }

  .js-ag-vacancy_arrow {
    float: left;
    margin: 20px 25px 0 0;

    opacity: 1;

    position: static;

    -webkit-transform: none;
    -moz-transform: none;
    -ms-transform: none;
    -o-transform: none;
    transform: none;
  }
  .js-ag-vacancy_arrow__hide,
  .ag-vacancy_box:hover .js-ag-vacancy_arrow__hide {
    background-color: rgba(105, 130, 255, .2);

    cursor: default;

    opacity: .4;
  }
}

@media only screen and (max-width: 639px) {

}

@media only screen and (max-width: 479px) {

}

@media (min-width: 768px) and (max-width: 979px) {
  .ag-format-container {
    width: 750px;
  }

}

@media (min-width: 980px) and (max-width: 1161px) {
  .ag-format-container {
    width: 960px;
  }

}
	  
	  
	  </style>
  </head>
</html>
<br>
<html lang="en">
  <head>
    
  </head>
  <body>
  
  <div class="site-wrap">
<?php include("./layouts/header.php"); ?> 
<div class="slides2">
		  

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img  class="imag1" src="images/todoback.png" style="width:100%">
  <div class="text1">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img class="imag1" src="images/porback.png" style="width:100%">
  <div class="text1">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img class="imag1"  src="images/Mayorback.png"style="width:100%">
  <div class="text1">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
	  
	  
	  
	  
	  </div>
	  

    <div class="site-blocks-cover responsive image1" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2">El producto que necesitas</h1>
            <div class="intro-text text-center text-md-left">
              <p class="mb-4">Empieza a vender hoy , encuentra tu producto favorito al mejor precio mayorista  y ofrece  precio y calidad a tus clientes</p>
              <p>
                <a href="index2.php" class="btn btn-sm btn-primary">Compra ahora</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Envios Gratis</h2>
              <p> ahorate viaje y pasaje  para tu primera compra mayorista te ofrecemos envio gratis o  si tu compra excede los 10000$</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Retornos</h2>
              <p>Estamos felices de complacer a nuestros clientes y socios y por eso nos preocupamos por la tranquilidad de ellos  ,  por cualquier incoveniente   , te ofrecemos retorno gratis . </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Atencion al cliente</h2>
              <p>Comunicaquete con nosotros facil y rapido , envia  un email en la paguina contacto o  mediante nuestras redes sociales , estamos en contacto 24hr.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-blocks-2">
      <div class="container">
		  <div class="row">
          <div class="col-md-12">
            <div class="site-section site-blocks-2">
                <div class="row justify-content-center text-center mb-5">
                  <div class="col-md-7 site-section-heading pt-4">
                    <h2>Categorias</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                         <a href="./busquedad.php?text=mujeres" class="d-flex color-item align-items-center" >
                <img src="images/remeranegra.png" alt="" class="img-fluid">
                </a> 
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Colleccion</span>
                        <h3>Mujer</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                             <a href="./busquedad.php?text=acsesorios" class="d-flex color-item align-items-center" >
                <img src="images/gorranegra.png" alt="" class="img-fluid">
                </a> 
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Collecion</span>
                        <h3>Accsesorios</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                       <a href="./busquedad.php?text=hombres" class="d-flex color-item align-items-center" >
                <img src="images/remeramen.png" alt="Men" class="img-fluid">
                </a> 
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Colleccion</span>
                        <h3>Hombres</h3>
                      </div>
                    </a>
                  </div>
                </div>
              
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <div class="site-section block-3 site-blocks-2 bg-light">
		
		<div id="js-vacations" class="ag-vacancy-block">
  <div class="ag-vacancy_content">
    <div class="ag-format-container">
      <div class="ag-vacancy_box">
        <div class="js-vacancy_list ag-vacancy_list">
				<?php
				
			
				$limite = 8;
			
			
					
			  $resultado = $conexion ->query("
    select productos.*, categorias.nombre as catego  from 
    productos 
    inner join categorias on productos.id_categoria = categorias.id where inventario > 0  limit ".$limite)or die($conexion->error);
					
			
				
	
				while($fila = mysqli_fetch_array($resultado)){
			
			?>	
          <div class="js-vacancy_item ag-vacancy_item">
            <div class="ag-vacancy_icon">
              <img src="images/<?php echo $fila['imagen'];?>" class="img-fluid" width="80%" height="50%" alt="" />
            </div>
			  
			  
			    <div class="ag-vacancy_name"><?php echo $fila['nombre'];?></div>
            <div class="ag-vacancy_descr">
				
					  <?php 
					if($fila['precioM'] == 0 ){
						
						?>
				
			 <p class="font-weight-bold" style="color:black; font-size: 170%;">$<?php echo $fila['precio'];?></p>
				<?php
				
				
						
					}else {
						
						?>
						
				 <p class="font-weight-bold" style="color:black; font-size: 170%;">$<?php echo $fila['precioM'];?></p>
						
						
						<?php
					}
				
				?>
				
				
				
      
            </div>
                
			       <a href="shop-single.php?id=<?php echo $fila['id'];?>" class="ag-vacancy_btn" >COMPRAR</a>

          </div>
			      <?php } ?> 

        </div>

        <div class="js-ag-vacancy_arrow js-ag-vacancy_arrow__prev">
          <img src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/slider-slick/images/arrow-slider-prev.svg" class="js-ag-vacancy_img-arrow__prev" alt="" />
        </div>
        <div class="js-ag-vacancy_arrow js-ag-vacancy_arrow__next js-ag-vacancy_arrow__hide">
          <img src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/slider-slick/images/arrow-slider-next.svg" class="js-ag-vacancy_img-arrow__next" alt="" />
        </div>
      </div>
    </div>
  </div>
</div>
	  

	 
    </div>
	  <div style="color: white"> cintas cinta cinta scotch cintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotch</div>
		
			<div style="color: white">film domestico , film para cocina, film por mayor film domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayor</div>
 

    <div class="site-section block-8">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Ofertas</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 mb-5">
            <a href="#"><img src="images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
          </div>
          <div class="col-md-12 col-lg-5 text-center pl-md-5">
            <h2><a href="#">50%  descuentos en produtos selecionados</a></h2>
            <p class="post-meta mb-4">por <a href="#">carmen</a> <span class="block-8-sep">&bullet;</span> diciembre 3, 2021</p>
            <p>Productos como cinta, film domestico , y cintas scotch estan ahora al mejor precio que puedas encontrar</p>
            <p><a href="index2.php" class="btn btn-primary btn-sm">Compra ahora</a></p>
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
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	    
	   <script src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/slider-slick/plugins/slick/slick.min.js"></script>
	   <script>
(function ($) {
  $(function () {


    class Vacantions {
      constructor() {
        this.slider = $('.js-vacancy_list');
      }

      initializeSlider() {
        var $this = this;

        // On init event
        $this.slider.on('init', function (event) {
          var prevVacantions = $(event.target).find('.js-vacancy_item.slick-active').first().prev().length;
          var nextVacantions = $(event.target).find('.js-vacancy_item.slick-active').last().next().length;

          (!prevVacantions) ? $('.js-ag-vacancy_arrow.js-ag-vacancy_arrow__prev').addClass('js-ag-vacancy_arrow__hide') : $('.js-ag-vacancy_arrow.js-ag-vacancy_arrow__prev').removeClass('js-ag-vacancy_arrow__hide');
          (!nextVacantions) ? $('.js-ag-vacancy_arrow.js-ag-vacancy_arrow__next').addClass('js-ag-vacancy_arrow__hide') : $('.js-ag-vacancy_arrow.js-ag-vacancy_arrow__next').removeClass('js-ag-vacancy_arrow__hide');
        });

        $this.slider.slick({
          infinite: false,
          slidesToShow: 2,
          variableWidth: true,
          rows: false,
          arrows: true,
          adaptiveHeight: true,
          prevArrow: $('.js-ag-vacancy_arrow__prev'),
          nextArrow: $('.js-ag-vacancy_arrow__next'),
          responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 1,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
              }
            }
          ]
        });

        // On swipe event
        $this.slider.on('swipe afterChange', function (event) {
          var prevVacantions = $(event.target).find('.js-vacancy_item.slick-active').first().prev().length;
          var nextVacantions = $(event.target).find('.js-vacancy_item.slick-active').last().next().length;

          (!prevVacantions) ? $('.js-ag-vacancy_arrow.js-ag-vacancy_arrow__prev').addClass('js-ag-vacancy_arrow__hide') : $('.js-ag-vacancy_arrow.js-ag-vacancy_arrow__prev').removeClass('js-ag-vacancy_arrow__hide');
          (!nextVacantions) ? $('.js-ag-vacancy_arrow.js-ag-vacancy_arrow__next').addClass('js-ag-vacancy_arrow__hide') : $('.js-ag-vacancy_arrow.js-ag-vacancy_arrow__next').removeClass('js-ag-vacancy_arrow__hide');
        });
      }

      init() {
        this.initializeSlider();
      }
    }

    var vacantions = new Vacantions();
    vacantions.init();


  });
})(jQuery);
    
    </script>
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

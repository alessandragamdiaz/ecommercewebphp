
<?php  
session_start();
include("./php/conexion.php");
if( isset($_GET['id'])){
	$resultado = $conexion ->query("select * from productos where id=".$_GET['id']) or die($conexion-> error);
	if(mysqli_num_rows($resultado) > 0 ) {
		
		$fila  = mysqli_fetch_row($resultado);
		
		
		
		
		
	}else {
		
		header("location:./index.php");
		
		
	}

	
	
	
	
} else {
	
	
	header("Location:./index.php");
	
	
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
	   <link rel="stylesheet" href="https://rawcdn.githack.com/SochavaAG/example-mycode/master/_common/css/reset.css">
	  	  <link rel="stylesheet" href="https://raw.githack.com/SochavaAG/example-mycode/master/pens/slider-slick/plugins/slick/slick.css">
	   <link rel="stylesheet" href="https://raw.githack.com/SochavaAG/example-mycode/master/pens/slider-slick/plugins/slick/slick-theme.css">

	  
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
  <body>
  
  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?> 
	  
<form method="get" action="./cart.php">
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
			  
			  
			      
          <?php 
            if(isset($_GET['error'])){
          ?>
            <div  id="login" class="alert alert-danger" role="alert">
            <?php echo $_GET['error'];?>
            </div>

          <?php  }?>
			  
			  <section style="color: black;">

  <!--Carousel Wrapper-->
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
      <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active" style="color: black;">
        <div class="view">
      <img class="d-block w-100" src="images/<?php echo $fila[4]; ?>" alt="<?php echo $fila[1]; ?>"  >
			
				 
        
          <a href="#!">
            <div class="mask rgba-black-light"></div>
          </a>
        </div>
        
      </div>
		 <?php
                  $re3=$conexion->query("select imagen,color,id from productos where id_nombre='".$fila[10]."'")or die($conexion->error);
					 
					  $colores = array();
                 while( $f3=mysqli_fetch_array($re3)) {
					 $color=$f3['color'];
					 
					 if($f3['imagen'] !== $fila[4] && $f3['color'] == $fila[8]){
					
			 ?>
		
		     <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
         
			
			  <img class="d-block w-100" src="images/<?php echo $f3['imagen']; ?>" alt="<?php echo $f3['nombre']; ?>"   >
             
				
					  
                  
          <a href="#!">
            <div class="mask rgba-black-light"></div>
          </a>
        </div>
       
      </div>
       	<?php $colores[] = $color; } } ?>
    
    </div>
    <!--/Slides-->
    <!--Controls-->
	  <style>
	  .button1{
			  
			  
			  color: black; background-color: black; opacity: 5%; width: 10%; height: 10%;
		      position: absolute;
		      top: 50%;
			  
			  
		  }  
	  
	  </style>
    <a class="carousel-control-prev button1" href="#carousel-example-2" role="button" data-slide="prev" >
      <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
      <span class="sr-only" style="color: black;">Previous</span>
    </a>
    <a class="carousel-control-next button1" href="#carousel-example-2" role="button" data-slide="next" >
      <span class="carousel-control-next-icon" aria-hidden="true"style="background-color: black;"></span>
      <span class="sr-only"  style="color: black;" >Next</span>
    </a>
    <!--/Controls-->
  </div>
  <!--/Carousel Wrapper-->

</section>
			  
			  
		

			  
         
          </div>
          <div class="col-md-6">
			  <form  method="post" action="cart.php" >
		<input type="text" class="form-control text-center" value="<?php echo $fila[0];?>" name="id" id="id"  style="display: none" >
			    
            <h1 class="text-black" style="font-size: 45px"><?php echo $fila[1];?></h1>
				  <br><br>
           <p>Descripcion : <br>
			   <?php echo $fila[2];?> , 1 pack = <?php echo $fila[13];?>/uds, 1 bulto = <?php echo $fila[14];?>. </p>
				<br>
				  
			  <div class="col-6 col-md-4 order-3 order-md-3 text-left">
			 <a  href="favoritelist.php?id=<?php echo $fila[0];?>"  class="favo"><img src="images/heart.png"></a> 
				  <a  class="nofavo"><img src="images/heart2.png" style = "display:none"></a>
				  </div>
				  <br>
            
			    <div class="form-group">
					
		
                  <label for="color">Color</label>
					
                  <select name="color" onchange="location = this.value;" class="form-control" required >
					  <option value="<?php echo $fila[8];?>"><?php echo $fila[8];?></option>
					  			  <?php
                  $re=$conexion->query("select color,id from productos where id_nombre='".$fila[10]."'")or die($conexion->error);
					 
					  $colores = array();
                 while( $f=mysqli_fetch_array($re)) {
					 $color=$f['color'];
					 
					 if($f['color']!== $fila[8] && !in_array($color,$colores)){
					
			 ?>
                  <option value="shop-single.php?id=<?php   echo $f['id'];?>"><?php  $color=$f['color'];  echo $f['color'];?></option>
				
					  
                   	<?php $colores[] = $color; } } ?>
                  </select> 
				
				
              </div>
					
			     <div class="form-group">
                  <label for="talla">Talla</label>
                <select name="talla" onchange="location = this.value;" class="form-control" required >
					  <option value="<?php echo $fila[7];?>"><?php echo $fila[7];?></option>
					  			  <?php
                  $re2=$conexion->query("select talla,id,color from productos where id_nombre='".$fila[10]."'")or die($conexion->error);
					 
					  
                 while( $f2=mysqli_fetch_array($re2)) {
					 
					 if($f2['color'] === $fila['8']&& $f2['talla'] !== $fila['7']){
						 
					
			 ?>
                  <option value="shop-single.php?id=<?php echo $f2['id'];?>"><?php   echo $f2['talla'];?></option>
				
                   	<?php } } ?>
                  </select> 
              </div>
				  <div data-inventario="<?php echo $fila[5];?>" id="inventario" >
				      <div class="form-group">
               <label for="talla">Elegir precio</label>
                <select name="price"  id="price" class="form-control"  required >
						 <option value="<?php echo $fila[3];?>">1 Pack por mayor</option>
						<option value="<?php echo $fila[9];?>">1 Articulo por menor</option>
                        <option value="<?php echo $fila[11];?>">1 Bulto</option>
					
					
			
				
                
                  </select> 
              </div>
				      <p><strong class="text-primary h4"  id="priceopt" > $ <?php echo $fila[3];?></strong></p><br>
				 
				    
				  
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
				    
			<div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" name="qty" id="qty" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
				 
            </div>

            </div>
					  
					  
					  
            <input type="submit" class="buy-now btn btn-sm btn-primary" value="AGREGAR A CARRITO"  id="send" >
					   </div>
				  
				   <p style="display: none; color: slategray; font-weight: 200;" id="nostock" >"Temporalmente sin stock ,Contacte a atencion al cliente"</p>


						
			</form>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      
		
		
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
	 <span class="ag-vacancy_text__strong">$<?php echo $fila['precio'];?></span> <?php echo $fila['catego'];?>
				<?php
				
				
						
					}else {
						
						?>
						
				 <span class="ag-vacancy_text__strong">$<?php echo $fila['precioM'];?></span> <?php echo $fila['catego'];?>
						
						
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
	  
	  
	  $(document).ready(function(){
		  
		
	setTimeout(function() { $("#login").hide(); }, 5000);
		  
		  

		
    $('select[name=price]').change(function() { 
		
	 var price = $(this).val();
		
		if( price == "0"){
			
	 $("#send").hide();
	

	 $("#priceopt").text("No stock"); 
	
			
		}else{
		
		
	  $("#send").show();

	 $("#priceopt").text("$"+price); 
	
		}
	
	
	});

		  
			var stock = $("#inventario").data('inventario');
		  
		  if ( stock == 0 ){
			  
			  
			  
			 $("#nostock").show(); 
			
			   $("#inventario").hide(); 
			 
			  
			  
		  }
		  
 
	 
		  
		  
	  });
		  
		  
	  
	  
	  
	  
	  
	  
	  </script>
	  
	 
  </body>
</html>
<?php 
session_start();
include './php/conexion.php';
if(!isset($_GET['text'])){	
header("Location:./index.php");
} 

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda</title>
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
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Buscando  <?php echo $_GET['text'];
					?></h2></div>
                <div class="d-flex">
                 <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="filter" >
                     filtro
                    </button>
                 
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Nombres, A to Z</a>
                      <a class="dropdown-item" href="#">Nombres, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Precio, low to high</a>
                      <a class="dropdown-item" href="#">Precio, high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">
			<?php
				include('php/conexion.php');
				$resultado = $conexion ->query("select productos.*, categorias.nombre as categoria from productos
				inner join categorias on productos.id_categoria = categorias.id
				  where 
				  productos.nombre like '%".$_GET['text']."%' or
				  productos.descripcion like '%".$_GET['text']."%' or
				  productos.talla like '%".$_GET['text']."%' or
				  categorias.nombre like '%".$_GET['text']."%' or
				  productos.color like '%".$_GET['text']."%'
		          order by id DESC")or die ($conexion -> error);
				if(mysqli_num_rows($resultado) > 0){
				while($fila = mysqli_fetch_array($resultado)){
			
			?>	
				<div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" >
                     <div class="block-4 text-center border" style=" min-height: 250px;
  height: 100%;" >
                       <figure class="block-4-image"  >
                         <a href="shop-single.php?id=<?php echo $fila['id'];?>">
						 <img src="images/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>" class="img-fluid"></a>
                        </figure>
                       <div class="block-4-text p-4" >
						   <div class="row">
  <div class="col-sm-8">  
	  
	<b><a href="shop-single.php?id=<?php echo $fila['id'];?>"><?php echo $fila['nombre'];?></a></b>
	</div>
							   
  <div class="col-sm-4">
	  
	 <p class="text-primary font-weight-bold">$<?php echo $fila['precioM'];?></p>
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
                  <?php } }else{
					echo '<br>     <h2> No hay resultados <h2>';
					
					}?> 

            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

 
			   <div class="col-md-3 order-1 mb-5 mb-md-0" id="fil" style = "display:none">
			  <button style="position: absolute; right: 0%;" id="closefil">X</button>
            <div class="border p-4 rounded mb-4">
				
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categorias</h3>
                <ul class="list-unstyled mb-0">
				  <?php
				  $re= $conexion->query("select * from categorias");
				  
				  while($f= mysqli_fetch_array($re)){  
				  
				  ?>
				  
                <li class="mb-1"><a href="./busquedad.php?text=<?php echo $f['nombre']; ?>" class="d-flex"><span> <?php echo $f['nombre']; ?></span>
					<span class="text-black ml-auto"><?php $re2 = $conexion->query("select count(*) from productos where id_categoria = ".$f['id']);
						$fila = mysqli_fetch_row($re2); 
						echo $fila[0]; ?></span></a></li>
            
				  <?php } ?>
              </ul>
            </div>

            <div class="border p-4 rounded mb-4">
             

            <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Talla</h3>
             
							  
				  <?php
				  $re2 = $conexion->query("SELECT * from tallas");
				  while($f=mysqli_fetch_array($re2)){
				
				  ?>
                <a href="./busquedad.php?text=<?php echo $f['talla'];?>" class="d-flex color-item align-items-center" >
                  <span class="text-black"><?php echo $f['talla']; ?></span>
                </a>
				  
				  <?php } ?>
				
               
          
              </div>

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>
             <?php
				  $re = $conexion->query("SELECT * from color");
				  while($f=mysqli_fetch_array($re)){
				
				  ?>
                <a href="./busquedad.php?text=<?php echo $f['color'];?>" class="d-flex color-item align-items-center" >
                  <span style="background-color: <?php echo $f['code']; ?>" class="color d-inline-block rounded-circle mr-2"></span> <span class="text-black"><?php echo $f['color']; ?></span>
                </a>
				  
				  <?php } ?>
               
              </div>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="site-section site-blocks-2">
                <div class="row justify-content-center text-center mb-5">
                  <div class="col-md-7 site-section-heading pt-4">
                    <h2>Categories</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                         <a href="./busquedad.php?text=mujeres" class="d-flex color-item align-items-center" >
                <img src="images/women.jpg" alt="" class="img-fluid">
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
                <img src="images/children.jpg" alt="" class="img-fluid">
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
                <img src="images/men.jpg" alt="" class="img-fluid">
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
	  
	  
	    $("#filter").click(function(){
			
			 $("#fil").show();
				  $("#filter").hide();
			
		});
		  
		    
	    $("#closefil").click(function(){
			
			 $("#fil").hide();
				  $("#filter").show();
			
		});
	  
	  
	  
	  
	  
	  </script>
    
  </body>
</html>
<?php
session_start();
include "./php/conexion.php";


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
    
  </head>
  <body>
  
  <div class="site-wrap">
  <?php include("./layouts/header.php"); ?> 

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Contactanos</h2>
          </div>
          <div class="col-md-7">

            <form id="my-form" action="./php/mailcontact.php" method="post">
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="name" maxlength="20">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Numero<span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="c_lname" name="number" maxlength="15">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Asunto </label>
                    <input type="text" class="form-control" id="c_subject" name="subject" maxlength="15">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black"> Message </label>
                     <input type="text" class="form-control" id="c_message" name="message" maxlength="50">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" id="enviar" class="btn btn-primary btn-lg btn-block" value="Enviar mensaje" style="visibility: hidden">
					   <input type="button" id="check" class="btn btn-primary btn-lg btn-block" value="revisar texto" >
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5 ml-auto">
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Buenos aires</span>
              <p class="mb-0">Rivadavia 2775 , balvanera , once</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">London</span>
              <p class="mb-0">londres zona 2,Reino unido</p>
            </div>
			     <div class="p-4 border mb-3">
	<a href="https://www.booking.com/searchresults.en-gb.html?aid=7906592&sid=bf3f689870fe4a43ee3aafd80db16aa1&sb=1&src=searchresults&src_elem=sb&error_url=https%3A%2F%2Fwww.booking.com%2Fsearchresults.en-gb.html%3Faid%3D7906592%3Bsid%3Dbf3f689870fe4a43ee3aafd80db16aa1%3Btmpl%3Dsearchresults%3Bcheckin_month%3D12%3Bcheckin_monthday%3D6%3Bcheckin_year%3D2021%3Bcheckout_month%3D11%3Bcheckout_monthday%3D19%3Bcheckout_year%3D2021%3Bcity%3D-3247115%3Bclass_interval%3D1%3Bdest_id%3D-3247115%3Bdest_type%3Dcity%3Bdtdisc%3D0%3Bgroup_adults%3D2%3Bgroup_children%3D0%3Binac%3D0%3Bindex_postcard%3D0%3Blabel_click%3Dundef%3Bno_rooms%3D1%3Boffset%3D0%3Bpostcard%3D0%3Broom1%3DA%252CA%3Bsb_price_type%3Dtotal%3Bshw_aparth%3D1%3Bslp_r_match%3D0%3Bsrpvid%3D308531a211420071%3Bss_all%3D0%3Bssb%3Dempty%3Bsshis%3D0%3Btop_ufis%3D1%3Bsig%3Dv1LuavENoN%26%3B&ss=Chiang+Mai&is_ski_area=0&ssne=Chiang+Mai&ssne_untouched=Chiang+Mai&city=-3247115&checkin_year=2021&checkin_month=12&checkin_monthday=7&checkout_year=2021&checkout_month=12&checkout_monthday=12&group_adults=2&group_children=0&no_rooms=1&sb_changed_dates=1&from_sf=1"><video width="70%" height="240%" style="margin-left: 10%;" src="./images/banner3.MOV" autoplay loop playsinline></video></a>
			<button class="mute-video" type="button" style="background-color:rgba(0,0,0,0.00); border:rgba(0,0,0,0.00); float:right;" width="30%" height="50%"><img src="./images/sound.png" width="50%" height="50%"></button>
			 

         

          </div>
        </div>
      </div>
    <div class="site-section block-3 site-blocks-2 bg-light">
		<div style="display: none;"> cintas cinta cinta scotch cintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotchcintas cinta cinta scotch</div>
		
			<div style="display: none;">film domestico , film para cocina, film por mayor film domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayorfilm domestico , film para cocina, film por mayor</div>

    </div>

    <?php include("./layouts/footer.php"); ?> 
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
	 

	<script>
		$("#check").on("click", ev => {
  ev.preventDefault();
  
  const urlRegex = /(https?:\/\/[^\s]+)/gm;
  const message = $("#c_message").val();
  
  if(! message.match(urlRegex)){
    // you can send the message with ajax
    // ...ajax code
	  document.getElementById("enviar").style.visibility="visible";
	  document.getElementById("check").style.visibility="hidden";
    
    
  } else {
    // there was a link in the message, give a warning or something
    alert("link detected");
  }
  
});
		
		

	  $("video").prop('muted', true);

$(".mute-video").click(function () {
    if ($("video").prop('muted')) {
        $("video").prop('muted', false);
        $(this).addClass('unmute-video'); // changing icon for button

    } else {
        $("video").prop('muted', true);
        $(this).removeClass('unmute-video'); // changing icon for button
    }
    console.log($("video").prop('muted'))
});
	  
	  
	  
	  </script>


    
  </body>
</html>
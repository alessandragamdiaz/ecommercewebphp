<?php
 	

// SDK de Mercado Pago
include './pago/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-4020533151206333-042223-5c4a8c7ca851f48f3741e712a4ed043b-172797654');

		


// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Carmen comercio';
$item->quantity = 1;
$item->unit_price = $totalP;
$preference->items = array($item);
$preference->save();



$preference->back_urls = array(
    "success" => "https://comerciomayorista.com.ar/thank1.php?id_venta=".$_GET['id_venta']."&pago=mercadopago",
    "failure" => "https://comerciomayorista.com.ar/pagar.php?id_venta=".$_GET['id_venta'],
    "pending" => "https://comerciomayorista.com.ar/thank1.php?id_venta=".$_GET['id_venta']."&pago=mercadopago"
);
$preference->auto_return = "approved";


?>


<!DOCTYPE html>
<html>
<head>
<title>Mercado Pago</title>
	<script src="https://sdk.mercadopago.com/js/v2"></script>
		<script>
// Agrega credenciales de SDK
  const mp = new MercadoPago('APP_USR-78dbcc7c-d7a4-4a95-b7f1-0c0a1a0fda4d', {
        locale: 'es-AR'
  });

  // Inicializa el checkout
  mp.checkout({
      preference: {
          id: 'producto'
      },
      render: {
            container: '.cho-container', // Indica el nombre de la clase donde se mostrará el botón de pago
            label: 'Pagar', // Cambia el texto del botón de pago (opcional)
      }
});
</script>
	


</head>
<body>
	<a href="<?php echo $preference->init_point; ?>" style="color: white;">
	<div class="cho-cointainer">
MERCADO PAGO
</div>
		</a>
</body>
</html>


 
 <?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
$name = $_POST['c_fname'];
$sname = $_POST['c_lname'];
$email = $_POST['c_email_address'];
$venta = $id_venta;

	 $message = '
	<html><body>
	
	
	<h1 style="color:#000000">Gracias '.$_POST['c_fname']." ".$_POST['c_lname'].'  por su compra</h1>
	<h2>total de la compra</h2>
	<h3>detalles de la compra</h3>
	<table>
	
	<thead>
		
		
		<tr>
		
		<td>Nombre del producto</td>
			<td>precio</td>
			<td>Cantidad</td>
				<td>Subtotal</td>
		
		
		</tr>
	
		</thead>
		<tbody>';

					     $total =0;
						 $basketdisplay = $_SESSION['basket'];
						 for($i=0;$i<count($basketdisplay);$i++){
						 	$total = $total + ($basketdisplay[$i]['Precio'] * $basketdisplay[$i]['Cantidad']);
							 $message.= '<tr><td>'.$basketdisplay[$i]['Nombre'].'</td>';
							 $message.= '<td>'.$basketdisplay[$i]['Precio'].'</td>';
							 $message.= '<td>'.$basketdisplay[$i]['Cantidad'].'</td>';
							 $message.= '<td>'.($basketdisplay[$i]['Precio']*$basketdisplay[$i]['Cantidad']).'</td></tr>';
							 
						 }
	     
   
   
    $message.= "</tbody></table>";
    $message.= "<h2>Total de compra".$total."</h2>";

    $message.= "<a href='http://c2140972.ferozo.com/order.php?id_venta=".$id_venta."' style='background-color: aqua;color: white;padding: 10px;'>ver status del pedido</a> </body></html>";
use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../phpmailer/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'c2140972.ferozo.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'admin@comerciomayorista.com.ar';                     //SMTP username
    $mail->Password   = 'Ale11829';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('admin@comerciomayorista.com.ar', 'CarmenComercioMayorista');
    $mail->addAddress($_POST['c_email_address'],$name);     //Add a recipient
               

  
 
    //Content
    $mail->isHTML(true);   

   //Set email format to HTML
    $mail->Subject = 'Felicitaciones has hecho una compra';
    $mail->Body    = $message;
    $mail->send();
	
header("Location: ../pagar.php?id_venta=".$venta);	
    
	  
} catch (Exception $e) {
   
	
}


    
?>
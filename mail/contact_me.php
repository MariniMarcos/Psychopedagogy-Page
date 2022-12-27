<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   empty($_POST['phone'])	   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
	   echo "No arguments Provided!";
	   return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
	
// create email body and send it	
$to = 'dispiritogiuli@gmail.com'; // put your email 
$email_subject = "Contacto desde la página web:  $name";
$email_body = "Recibiste un mensaje desde el formulario de contacto. \n\n".
				  "Detalles:\n \nNombre: $name \n Telefóno: $phone\n ".
				  "Email: $email_address\n Mensaje: \n $message";
$headers = "From: $email_address\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
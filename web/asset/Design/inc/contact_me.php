<?php
header('Content-Type: charset=utf-8');
// check if fields passed are empty
if(empty($_POST['name'])                  ||
   empty($_POST['email'])                 ||
   empty($_POST['message'])        ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
        echo "No arguments Provided!";
        return false;
   }
        
$name = $_POST['name'];
$email_address = $_POST['email'];
$web = $_POST['web'];
$message = $_POST['message'];
        
// create email body and send it        
$to = 'lic.abrego@gmail.com'; // put your email
$email_subject = "Contacdo:  $name";
$email_body = "Tienes un nuevo mensaje. \n\n".
                                  "Detalles:\n \n Nombre: $name \n ".
                                  "Correo: $email_address\n Dirección web: $web \n Mensaje: \n $message";
$headers = "De: $name\n";
$headers .= "Contestar a: $email_address";         
mail($to,$email_subject,$email_body,$headers);
return true;                        
?>
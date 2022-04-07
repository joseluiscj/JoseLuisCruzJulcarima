<?php

  /*$receiving_email_address = 'jesecruzcj@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
  echo "Mensaje enviado";*/

$to = "jesecruzcj@gmail.com";
$nombre = $_POST['name'];
$correo = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$contenido = "Nombre: ".$nombre. "\nCorreo: ".$correo. "\nTema: ".$subject. "\nmensaje: ".$message;

mail($to, $contenido, $contenido );
echo "Mensaje enviado"


/*
	$nombre = $_POST['name'];
  $correo = $_POST['email'];
  $tema = $_POST['subject'];
	$mensaje = $_POST['message'];

	$contenido = "Nombre: ".$nombre. "\nCorreo: ".$correo. "\nTema: ".$tema. "\nmensaje: ".$mensaje;

  mail('jesecruzcj@gmail.com',$contenido);

  echo $nombre. " ha dicho:<br>".$mensaje;
  
  echo "Mensaje enviado";*/

?>

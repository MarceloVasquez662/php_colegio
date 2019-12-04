<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Correo enviado con exito!'
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $secondname= @trim(stripslashes($_POST['secondname'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $message = @trim(stripslashes($_POST['message']));
    $subject='Contacto';

    $email_from = $email;
    $email_to = 'marcelovasquez662@gmail.com';

    $body = 'Nombre: ' . $name . "\n\n" . 'Apellido: ' . $secondname . "\n\n" . 'Email: ' . $email . "\n\n" . 'Mensaje: ' . $message;

    $success = @mail($email_to, $subject, $body, 'De: <'.$email_from.'>');

    echo json_encode($status);
    die;
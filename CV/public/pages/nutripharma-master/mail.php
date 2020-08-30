<?php
/**
 * Created by PhpStorm.
 * User: luisc
 * Date: 25/7/2016
 * Time: 8:58 PM
 */

$name = $_POST['name'];
//$dni = $_POST['dni'];
//$address = $_POST['address'];
//$district = $_POST['district'];
$email = $_POST['email'];
$cellphone = $_POST['cellphone'];
//$radio = $_POST['radio'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers = 'From: '.$email . "\r\n" .
    'Reply-To: ventas@nutripharma.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail('ventas@nutripharma.com', $subject, 'Nombre: '.$name."\n\n
                                                        Correo: ".$email."\n\n
                                                        Celular: ".$cellphone."\n\n
                                                        Mensaje: ".$message, $headers);
header("Location: index.html");
die();
<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
// Looking to send emails in production? Check out our Email API/SMTP product!
$phpmailer = new PHPMailer();
$phpmailer->isSMTP();
// $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;

// $phpmailer->Username = 'a09c937056cf0f';


define('BASE_URL', 'http://localhost/pos/');
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'sistema');
define('CHARSET', '');
define('TITLE', 'PUNTO VENTA');
define('MONEDA', 'MX/ ');
define('HOST_SMTP', $phpmailer->Host = 'sandbox.smtp.mailtrap.io');
define('USER_SMTP', $phpmailer->Username = 'a09c937056cf0f');
define('CLAVE_SMTP', $phpmailer->Password = '8696daef34e21e');
define('PUERTO_SMTP', $phpmailer->Port = 2525);

?>
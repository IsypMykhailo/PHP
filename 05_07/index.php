<?php
require_once ("./vendor/autoload.php");

$header = new App\Design\Header();
$footer = new App\Design\Footer();

echo $header;

$mail = new App\Mail\MailController();
$mail->showForm();

echo $footer;
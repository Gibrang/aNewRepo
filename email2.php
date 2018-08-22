<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->setFrom('info@reduxweb.epizy.com', 'Your Name');
$mail->addAddress('gibran_dena@yahoo.com');
$mail->Subject = 'An HTML Message';
$mail->isHTML(true);
$mail->Body = 'Hello, <b>my friend</b>! This message uses HTML!';

?>
<?php 
$to_email = 'bhavyachavda55@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: bhavyachavda55@gmail.com';
mail($to_email,$subject,$message,$headers);
?>
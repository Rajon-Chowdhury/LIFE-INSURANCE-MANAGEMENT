<?php


$to="01792970443@vtext.com";
$from="sijanurrahman2015@gmail.com";
$message="This is a text message\n New line.....";
$headers = "From: $from\n";

mail($to,'',$message,$headers);

?>
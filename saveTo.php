<?php
$mail = "ok";
$mail = $_POST['mail'];

$file = "./text.txt";
$write = $mail."\n";

//$arr = explode(delimiter, string)

if(!empty($mail)){
	file_put_contents($file, $write, FILE_APPEND);
}


 header('Location: index.php');
 ?>
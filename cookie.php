<?php
if (isset($_COOKIE['CounterCookie'])) {
	
 
$cookie = $_COOKIE['CounterCookie'];
$arr = explode("_", $cookie);
$file = "./cookie.txt";
$fp = fopen($file,"r");
$newFile = "";
$isNewUser = true;

$getTxt = array();
$i=0;
$sum = 0;

$getAllTxt =  file_get_contents($file);
$getTxt = explode("\n",$getAllTxt);

foreach ($getTxt as $key => $value) {
	$nbConnexion = explode(" ",$value)[0];
	$idUser = explode(" ",$value)[1];
	if(trim($arr[1]) == trim($idUser)){
		$nbConnexion++;
		$isNewUser = false;
	}
	$newFile .= $nbConnexion." ".$idUser ;
	if ($key +1 != count($getTxt)) {
		$newFile .= "\n";
	}
	$sum += $nbConnexion;


}
if ($isNewUser) {
	$newFile .= "\n" . $arr[0] . " " . $arr[1];
}
file_put_contents($file, $newFile);
$result = "Nombre de personne unique ". count($getTxt)." total ". $sum;
file_put_contents("result.txt",$result );
}


?>
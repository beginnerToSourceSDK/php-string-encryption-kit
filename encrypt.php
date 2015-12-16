<?php	
function encrypt($string){
	$string = str_rot13($string);
	$string = str_replace("a","1",$string);
	$string = str_replace("e","2",$string);
	$string = str_replace("i","3",$string);
	$string = str_replace("o","3",$string);
	$string = str_replace("u","4",$string);
	$string = md5($string);
	echo ("modified md5: $string");
}

$string = $_POST["text"];

$string2 = encrypt($string);

$string1 = md5($string);

echo  "<br>" . "md5: $string1 \n" . "<br>";

?>

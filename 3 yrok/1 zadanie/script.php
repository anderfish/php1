<?php
function calculator($x, $y, $operacia) {
	 if ($operacia == "+"){
		 return $x+$y;
 }   elseif ($operacia == "-") {
	     return $x-$y;
	 } elseif ($operacia == "*") {
	     return $x*$y;
     } elseif ($operacia == "/") {
	     return $x/$y;
	 }
 }	
assert (4 == calculator(2, 2, '+')); 
$rez = calculator($_GET['x'], $_GET['y'], $_GET['operacia']);
echo $rez;

 ?>
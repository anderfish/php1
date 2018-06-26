<!DOCYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
   <title> 3 урок - Калькулятор.</title>
  </head> 
  <body>
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
assert (10 == calculator(5, 5, '+')); 
$rez = calculator($_GET['x'], $_GET['y'], $_GET['operacia']);
  ?>
   <form action = "3.1.2.php" method = "get">
   <input type ="number" name = "x">
   <select name ="operacia">
    <option value ="+">+</option>
	<option value ="-">-</option>
	<option value ="*">*</option>
	<option value ="/">/</option>
   <input type ="number" name = "y">
   <input type = "submit" value = "Равно">
   <?php echo $rez ?>
   </form>
  </body>
 </html> 
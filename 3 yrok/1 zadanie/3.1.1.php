<!DOCYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
   <title> 3 урок - Калькулятор.</title>
  </head> 
  <body>
  <?php
  include __DIR__.'/script.php';
  ?>
   <form action = "script.php" method = "get">
   <input type ="number" name = "x">
   <select name ="operacia">
    <option value ="+">+</option>
	<option value ="-">-</option>
	<option value ="*">*</option>
	<option value ="/">/</option>
   <input type ="number" name = "y">
   <input type = "submit" value = "Равно">
   </form>
  </body>
 </html> 
	
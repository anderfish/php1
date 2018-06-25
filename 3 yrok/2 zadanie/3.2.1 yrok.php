<!DOCTYPE HTML>
<html>
<head>
 <title> Фотогалерея </title>
 </head>
 <body>
 <?php
 $fot = [1=>'lev.jpg', 2=>'kapitan.jpg', 3=>'EGORKA.jpg'];
 ?>
  <h3> Cмешные картинки </h3>
<a href="http://php1/image.php?id=1"><img src="http://php1/photo/<?php echo $fot[1] ?>"width="300" > </a>
<a href="http://php1/image.php?id=2"><img src="http://php1/photo/<?php echo $fot[2] ?>" width="300" ></a>
<a href="http://php1/image.php?id=3"><img src="http://php1/photo/<?php echo $fot[3] ?>" width="300" ></a>

 </body>
 <html>
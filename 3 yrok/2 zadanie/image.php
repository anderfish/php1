<html>
<head>
    <title> Фотогалерея</title>
</head>
<body>
<?php
$fot = [1=>'lev.jpg', 2=>'kapitan.jpg', 3=>'EGORKA.jpg'];
?>
<img src="http://php1/photo/<?php echo $fot[$_GET['id']] ?>">
</body>
</html>
<html>
<head>
<title> 2 урок </title>
</head>
<body>
<p> 1 задание </p>
<table border="1">
   <caption>Таблица Истинности</caption>
   <tr>
    <th>x</th>
    <th>y</th>
    <th>&&</th>
    <th>||</th>
	<th>xor</th>
   </tr>
   <tr>
    <td><?php echo $x=(int)false; ?></td>
    <td><?php echo $y=(int)false; ?></td>
    <td><?php echo (int)($x&&$y); ?></td>
    <td><?php echo (int)($x||$y); ?></td>
    <td><?php echo (int)($x xor $y); ?></td>
   </tr>
   <tr>
    <td><?php echo $x=true; ?></td>
    <td><?php echo $y=(int)false; ?></td>
	<td><?php echo (int)($x&&$y); ?></td>
	<td><?php echo ($x||$y); ?></td>
	<td><?php echo ($x xor $y); ?></td>
   </tr>
   <tr>
    <td><?php echo $x=(int)(false); ?></td>
	<td><?php echo $y=true; ?></td>
	<td><?php echo (int)($x&&$y); ?></td>
	<td><?php echo ($x||$y); ?></td>
	<td><?php echo ($x xor $y); ?></td>
   </tr>
   <tr>
   <td><?php echo $x=true; ?></td>
   <td><?php echo $y=true; ?></td>
   <td><?php echo ($x&&$y); ?></td>
   <td><?php echo ($x||$y); ?></td>
   <td><?php echo (int)($x xor $y); ?></td>
   </tr>
  </table>
  <p> 2 задание </p>
<?php
function discriminant($a, $b, $c)
  {
	  return ($b**2-4*$a*$c);
	  
  }
assert (1 == discriminant(2,3,1));
assert (4 == discriminant(3,4,1));
assert (-23 == discriminant(6,5,2));
echo discriminant(2,3,1);
?>
<p> 3 задание </p>
<?php
$rez = include __DIR__. '/proverka.php'; // Cоздали переменную x в файле proverka.php и присвоили ей значение 100, пробуем вернуть с помощью return значение этой переменной  в нашем файле.
 echo $rez;  // Вывод: Значение переменной оператор return вернул, значит во включаемом файле он работает также.
 echo '<br>';
 $rez2 = include __DIR__.'/proverka2.php'; // Создали переменную y в файле proverka2.php и присвоили ей значение 150, пробуем вернуть без оператора return значение переменной в нашем файле.
 echo $rez2;// Вывод:  include вернул только результат успешного включения файла '1',без возврата значения переменной.
 ?>


<p> 4 задание </p>
<?php
function pol($name){
	$lastChar = substr($name, -2);
	if ($lastChar == 'а'|| $lastChar == 'я' ) {
		return 'Женское имя';
	} elseif ($lastChar == 'й'|| $lastChar == 'р' || $lastChar == 'н' || $lastChar =='л' || $lastChar == 'в' || $lastChar == 'м' || $lastChar == 'в') {
		return 'мужское имя';
	} else { 
	return 'null';
	}
}
echo pol('николай');
?>

  
  
 </body>
</html>

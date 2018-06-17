<?php
echo var_dump(3/1); // 3 (int)
echo '<br />';
echo var_dump(1/3); // 0.33333333333333 (float)
echo '<br />';
echo var_dump('20cats'+40); // 60(int)
echo '<br />';
echo var_dump (18%4); // Остаток от деления 2 (int)
echo '<br />';
echo '<br />';


echo ($a=2);
echo '<br />';
$x = ($y=12)-8;
echo ($x); // Значение выражения присваивания тоже будет являться выражением, так как оно не обязательно число.
echo '<br />';
echo '<br />';


var_dump(1==1.0);// После преобразования типов 1=1 поэтому значение bool (true)
echo '<br />';
var_dump (1===1.0); // 1=1 но разный тип (integer и float) поэтому значение bool (false)
echo '<br />';
var_dump ('02'==2); // После преобразования типов 2=2 поэтому значение bool (true)
echo '<br />';
var_dump ('02'===2); // 2=2 но разный тип (integer и float) поэтому значение bool (false) 
echo '<br />';
var_dump ('02'=='2'); // После преообразования типов 2=2 поэтому значение bool (true)
echo '<br />';
echo '<br />';


$x = (true xor true); // Исключающее или, поэтому значение bool (false), чтобы результат был bool(true) одно из значений(любое) должно быть false
var_dump($x);


?>
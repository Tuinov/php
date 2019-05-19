<?php

//echo '<h1>Hello world!</h1>'.PHP_EOL;
//print '<h1>Hello world!</h1>'."\n";
//echo '<h1>Hello world!</h1>';

//echo 'Hello'.' world'.'!'; //конкатенация

//$nameVarString = "Hello world!";
//echo $nameVarString;

$a = 5;
$b = 3;
$br = '<br/>';
$a *= $b;

echo '$a + $b = ' . ($a + $b) . $br;
echo '$a - $b = ' . ($a - $b) . $br;
echo '$a * $b = ' . $a * $b . $br;
echo '$a / $b = ' . $a / $b . $br;
echo '$a % $b = ' . $a % $b . $br;
echo '$a ** $b = ' . $a ** $b . $br;

echo '$a magic = ' . ($a + '3') . $br;
echo 'Тип данных $a = ' . gettype($a) . $br;
$a .= $b;
echo 'magic = ' . $a . $br;

echo 'всего штук: ' . ('12 яблок' + '1 арбуз и 2 дыни') . $br;
$myArray = [12, 13, 14, 'Яблоко'];

//var_dump($myArray);
print_r($myArray);
//var_export($myArray);

$c = 4;
echo $br;
echo '$c++ = ' . $c++ . $br;
echo '$c = ' . $c . $br;
echo '++$c = ' . ++$c . $br;

$w = 'world!';

echo 'Hello $w'.$br;
echo "Hello $w \" ".$br;

define('APPLE_COUNT', 12);
const COW_COUNT = 33;

$COW_COUNT = 'trap';

echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['REMOTE_ADDR'];

echo $br;

$isEmpty = true; //false
var_dump( $isEmpty);
echo $br;
var_dump( !$isEmpty);
echo $br.$br;

$a = 3;
$b = '3';

/*var_dump($a == $b);  // Сравнение по значению
var_dump($a === $b); // Сравнение по значению и типу
var_dump($a > $b);    // Больше
var_dump($a < $b);    // Меньше
var_dump($a <> $b);  // Не равно
var_dump($a != $b);   // Не равно
var_dump($a !== $b); // Не равно без приведения типов
var_dump($a <= $b);  // Меньше или равно
var_dump($a >= $b);  // Больше или равно*/

$todayh = getDate();
$d = $todayh['mday'];
$m = $todayh['mon'];
$y = $todayh['year'];

echo $d.$br;
echo $m.$br;
echo $y.$br;
echo $todayh['seconds'];

?>


<h1>Текущая дата: <?=$y?> год, <?=$m?> месяц, <?=$d?> число</h1>

<?php

/*$a = 3;

$isIf = $a >= 0;

if ($isIf) {
    echo "а больше или равно нулю";
}

if(!$isIf) {
    echo "а меньше нуля";
}*/

/*====================================*/


$month = 3;
/*
switch ($mounth) {

    case 1 :
        echo "Январь";
        break;
    case 2 :
        echo "Февраль";
        break;
    case 3 :
        echo "Март";
        break;
    case 4 :
        echo "Апрель";
        break;

}*/

/*====================================*/


$speed = 80;

/*if ($speed > 60) {
    echo "С вас штраф";
} else {
    echo "Все в порядке";
}*/

/**(Условие) ? (Операнд по истине) : (Оператор по лжи); */
//echo ($speed > 60) ? "С вас штраф" : "Все в порядке";

$someWord = "345345";


//echo isset($someWord)? $someWord : 'Var is empty';
/**верхняя и нижняя строки равносильны*/
//echo $someWord ?? 'Var is empty';

/*====================================*/

/** TODO расскомментировать строку ниже */
//emptyIssetIsNull();

function emptyIssetIsNull() {
$myVar = null;
echo PHP_EOL.PHP_EOL.'$myVar = null'.PHP_EOL.' isset = ';
var_dump(isset($myVar));
echo PHP_EOL.' empty = ';
var_dump(empty($myVar));
echo PHP_EOL.' is_null = ';
var_dump(is_null($myVar));

$myVar = 0;
echo PHP_EOL.PHP_EOL.'$myVar = 0'.PHP_EOL.' isset = ';
var_dump(isset($myVar));
echo PHP_EOL.' empty = ';
var_dump(empty($myVar));
echo PHP_EOL.' is_null = ';
var_dump(is_null($myVar));

$myVar = false;
echo PHP_EOL.PHP_EOL.'$myVar = false'.PHP_EOL.' isset = ';
var_dump(isset($myVar));
echo PHP_EOL.' empty = ';
var_dump(empty($myVar));
echo PHP_EOL.' is_null = ';
var_dump(is_null($myVar));

$myVar = '';
echo PHP_EOL.PHP_EOL.'$myVar = \'\''.PHP_EOL.' isset = ';
var_dump(isset($myVar));
echo PHP_EOL.' empty = ';
var_dump(empty($myVar));
echo PHP_EOL.' is_null = ';
var_dump(is_null($myVar));


echo PHP_EOL.PHP_EOL.'$myVar1 ;'.PHP_EOL.' isset = ';
var_dump(isset($myVar1));
echo PHP_EOL.' empty = ';
var_dump(empty($myVar1));
echo PHP_EOL.' is_null = ';

//переменной не существует. Выдаст ошибку
//var_dump(is_null($myVar1));
}





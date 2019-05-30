<?php

// 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
// Затем написать скрипт, который работает по следующему принципу:
// если $a и $b положительные, вывести их разность;
// если $а и $b отрицательные, вывести их произведение;
// если $а и $b разных знаков, вывести их сумму;
 $a = 10;
 $b = 8;

 if($a >= 0 && $b >= 0){
     echo ($a - $b);
 } elseif ($a < 0 && $b < 0) {
    echo ($a * $b); 
 } else {
    echo ($a + $b);
 };

//  2. Присвоить переменной $а значение в промежутке [0..15]. 
//  С помощью оператора switch организовать вывод чисел от $a до 15.

switch ($a) {
    case 1: echo 1;
    case 2: echo 2;
    case 3: echo 3;
    case 4: echo 4;
    case 5: echo 5;
    case 6: echo 6;
    case 7: echo 7;
    case 8: echo 8;
    case 9: echo 9;
    case 10: echo 10;
    case 11: echo 11;
    case 12: echo 12;
    case 13: echo 13;
    case 14: echo 14;
    case 15: echo 15;
 }
 
//  3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
//   Обязательно использовать оператор return.

function sum($a, $b){
    return ($a + $b);
};

function minus($a, $b){
    return ($a - $b);
};

function multiply($a, $b){
    return ($a * $b);
};

function share($a, $b){
    return ($a / $b);
};

echo share ($a, $b);

// 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
// В зависимости от переданного значения операции выполнить одну из арифметических операций 

function mathOperation($arg1, $arg2, $operation){

    switch ($operation) {
        case '-':
            minus($arg1, $arg2);
            break;
        case '+': 
            sum($arg1, $arg2);
            break;
        case '*': 
            multiply($arg1, $arg2);
            break;
        case '/': 
            share($arg1, $arg2);
            break;
    };
};

echo mathOperation(8, 6, '-');

// 6. *С помощью рекурсии организовать функцию возведения числа в степень. 
// Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

function power($val, $pow) {
    if($pow == 1) return $val;

    else {
        $val * power($val, $pow-1);
    } 
    };


echo power(7, 3);
// 7. *Написать функцию, которая вычисляет текущее время 
// и возвращает его в формате с правильными склонениями.

function time() 
    $time = getdate();
    $h = $time['hours'];
     $m = $time['minutes'];
     $s = $time['seconds'];

     if($h == 1 || $h == 21)
        echo $h . 'час';
     elseif ($h > 1 && $h < 5 || $h > 21 )
        echo $h . 'часa';
     else 
        echo $h . 'часов';  

        if($h == 1 || $h == 21 || $h == 31 || $h == 41 || $h == 51)
        echo $h . 'минута';
     elseif ($h > 1 && $h < 5 || $h > 21 && $h < 25 || $h > 31 && $h < 35 || $h > 41 && $h < 45 || $h > 51 && $h < 55)
        echo $h . 'минуты';
     else 
        echo $h . 'минут';   

        if($h == 1 || $h == 21 || $h == 31 || $h == 41 || $h == 51)
        echo $h . 'секунда';
     elseif ($h > 1 && $h < 5 || $h > 21 && $h < 25 || $h > 31 && $h < 35 || $h > 41 && $h < 45 || $h > 51 && $h < 55)
        echo $h . 'секунды';
     else 
        echo $h . 'секунд';


};

time();




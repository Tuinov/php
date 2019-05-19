<?php

//echo factor(5);

$temp = 1;

//вычисляем факториал числа
factorSuperNew(5);

function factor($n)
{
    if ($n <= 1) return 1;

    return $n * factor($n - 1);
}

//1*2*3*4*5*6*7

function factorNew($n)
{
    if ($n > 1)

        return $n * factor_new($n - 1);

    return 1;
}



function factorSuperNew($n)
{

    if ($n <= 1) {
        echo PHP_EOL . "Конец!" . PHP_EOL;
        return 1;
    }

    global $temp;
    $temp *= $n;
    echo $temp . PHP_EOL;

    return $n * factorSuperNew($n - 1);
}




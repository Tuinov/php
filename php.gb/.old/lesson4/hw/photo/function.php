<?php

const NDFL = 13;
const FSS = 2.9;
define(FFOMS, 5.1); //старая форма записи констант
define(AVANS, 30);

$oklad = 25000;

//$salary = $oklad - percent($oklad, AVANS) + $oklad/100*NDFL + $oklad/100*FSS + $oklad/100*FFOMS;

//echo $salary;

echo whereMyMoney($oklad);

function percent($oklad1, $percent)
{
    return $oklad1 / 100 * $percent;
}

function whereMyMoney($oklad)
{

    return $oklad - avans() - percent($oklad, NDFL) - percent($oklad, FFS) - percent($oklad, FFOMS) + premium();
}

function avans()
{
    global $oklad;
    return $oklad / 100 * AVANS;
}

function premium()
{
    $temp = mt_rand(1, 3);

    switch ($temp) {
        case 1 :
            return 2000;
        case 2 :
            return -3000;
        default :
            return 0;
    }
}

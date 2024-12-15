<?php
require_once 'data.php';

//to je un shit k ga das u uasort
function vecjiManjsiSort($a, $b) {
    return $a[0] <=> $b[0];
}

function cetrtaA() {
    global $rezultati;
    uasort($rezultati, 'vecjiManjsiSort');
}

//cetrtaA();


function Nti_vecjiManjsiSort($a, $b, $n) {
    return $a[$n] <=> $b[$n];
}

function cetrtaB($n) {
    global $rezultati;
    uasort($rezultati, function($a, $b) use ($n) {
        return Nti_vecjiManjsiSort($a, $b, $n);
    });
}

//cetrtaB(3);

function sum($arr) {
    $sum = 0;

    foreach($arr as $v) {
        $sum += $v;
    }

    return $sum;
}

function SumSort($a,$b) {
    return sum($a) <=> sum($b);
}

function cetrtaC() {
    global $rezultati;
    uasort($rezultati, 'SumSort');
}

//cetrtaC(3);

function arrMax($arr) {
    $arrMax=0;

    foreach($arr as $v) {
        $arrMax < $v && $arrMax = $v;
    }

    return $arrMax;
}

function najdaljsiSort($a, $b) {
    //hvala gpt
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] > $b[$i]) {
            return -1;
        }
        elseif ($a[$i] < $b[$i]) {
            return 1;
        }
    }
    return 0;
}

function cetrtaD() {
    global $rezultati;
    uasort($rezultati, 'najdaljsiSort');
}

//cetrtaD();

function cetrtaE() {
    /*skrbnik-friendly nacin da jih ne strasimo z &referencami*/
    global $rezultati;

    //sezmer rabs reference u forloopih da loh brises
    foreach($rezultati as $tekmovalec => &$meti) {
        foreach($meti as $met => &$dolzina) {
            if($dolzina <= 11) {
                unset($meti[$met]);
            }
        }

        if(count($meti) === 0) {
            unset($rezultati[$tekmovalec]);
        }
    }
}

//cetrtaE();

echo "<pre>" , print_r($rezultati) , "</pre>";
?>

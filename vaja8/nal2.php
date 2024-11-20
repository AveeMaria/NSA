<?php
function napolni() {
    $t1 = array();
    for ($i = 0; $i < 20; $i++) {
        $t1[$i] = rand(1, 10);
    }
    return $t1;
}

function prepisi($t1) {
    $vsota = array_sum($t1);//no way da to obstaja
    $t2 = array();

    for ($i = 0; $i < count($t1); $i++) {
        $t2[$i] = $vsota - $t1[$i];
    }
    return $t2;
}

function izpisi($t1, $t2) {
    echo "<table border='1' style='border-collapse: collapse; width: 60%;'><tr><th style='width: 10%'>Tabela 1</th>";
    foreach ($t1 as $v) {
        echo "<td style='width: 30px; text-align: center;'>$v</td>";
    }
    echo "</tr></table>";

    echo "<table border='1' style='border-collapse: collapse; width: 60%;'><tr><th style='width: 10%'>Tabela 2</th>";
    foreach ($t2 as $v) {
        echo "<td style='width: 30px; text-align: center;'>$v</td>";
    }
    echo "</tr></table>";
}

$t1 = napolni();
$t2 = prepisi($t1);
izpisi($t1, $t2);

echo "<hr style='width: 100%; height: 2px; background-color: red; border: none;'>";

izpisi(array_reverse($t1), array_reverse($t2));
?>
 

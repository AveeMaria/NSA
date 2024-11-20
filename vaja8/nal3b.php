<?php
function vnos() {
    $tabela = array();
    for ($i = 0; $i < 8; $i++) {
        $tabela[$i] = rand(0, 1);
    }
    return $tabela;
}

function drugaPretvorba($tabela) {
    $predznakBit = $tabela[0];
    $desetisko = 0;
    $stBitov = count($tabela);

    for ($i = 1; $i < $stBitov; $i++) {
        $desetisko += $tabela[$i] * pow(2, $stBitov - $i - 1);
    }

    if ($predznakBit == 1) {
        $desetisko = -1 * (pow(2, $stBitov - 1) - $desetisko);
    }

    return $desetisko;
}

$tabela = vnos();
$desetisko2 = drugaPretvorba($tabela);

echo "Tabela dvojiškega števila (od leve proti desni):<br>";
echo "<table border='1' style='border-collapse: collapse;'>";

echo "<tr style='text-align: center'>
    <td>+/-</td>
    <td>64</td>
    <td>32</td>
    <td>16</td>
    <td>8</td>
    <td>4</td>
    <td>2</td>
    <td>1</td>
    </tr>";


echo "<tr>";
foreach ($tabela as $v) {
    echo "<td style='width: 30px; text-align: center;'>$v</td>";
}
echo "</tr>";
echo "</table>";

echo "Desetiška vrednost predznačenega dvojiškega števila: $desetisko2<br>";
?>

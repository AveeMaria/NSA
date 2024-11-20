<?php
function vnos() {
    $tabela = array();
    for ($i = 0; $i < 8; $i++) {
        $tabela[$i] = rand(0, 1);
    }
    return $tabela;
}

function prvaPretvorba($tabela) {
    $desetisko = 0;
    $stBitov = count($tabela);

    for ($i = 0; $i < $stBitov; $i++) {
        $desetisko += $tabela[$i] * pow(2, $stBitov - $i - 1);
    }

    return $desetisko;
}

$tabela = vnos();
$desetisko = prvaPretvorba($tabela);

echo "Tabela dvojiškega števila (od leve proti desni):<br>";
echo "<table border='1' style='border-collapse: collapse;'>";

//to je za bit weight vidt
echo "<tr style='text-align: center'>
    <td>128</td>
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

echo "<br>Desetiška vrednost dvojiškega števila: $desetisko";
?>
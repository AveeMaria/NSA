<?php
function indeksiBarv($tab) {
    $tab3 = array();

    foreach ($tab as $index => $barva) {
        if (!isset($tab3[$barva])) {
            $tab3[$barva] = array();
        }
        $tab3[$barva][] = $index;
    }

    return $tab3;
}

function izpisiPokoncno($tab3) {
    echo "<table border='1' style='border-collapse: collapse;width: 10%''>";
    foreach ($tab3 as $barva => $indeksi) {
        echo "<tr><td style='text-align: center'><strong>$barva</strong></td></tr><tr><td>" . implode(", ", $indeksi) . "</td></tr>";
    }
    echo "</table><br>";
}

function izpisiLezece($tab3) {
    echo "<table border='1' style='border-collapse: collapse;width: 10%'>";
    
    foreach ($tab3 as $barva => $indeksi) {
        echo "<tr>";
        echo "<td><strong>$barva</strong></td><td>" . implode(", ", $indeksi) . "</td>";
        echo "</tr>";
    }

    echo "</table><br>";
}
?>

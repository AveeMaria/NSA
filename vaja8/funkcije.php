
<?php
function napolni() {
    $n = rand(2, 8);
    $tabela = array();

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i < $j) {
                $tabela[$i][$j] = 0;
            } elseif ($i > $j) {
                $tabela[$i][$j] = $n;
            } else {
                $tabela[$i][$j] = '*';
            }
        }
    }

    return [$tabela, $n];
}

function izpisi1($tabela, $n) {
    echo "<h2>Tabela velikosti $n x $n</h2>";
    echo "<table style='border-collapse: collapse;'>";

    for ($i = 0; $i < $n; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $n; $j++) {
            echo "<td style='width: 30px; height: 30px; border: 1px solid black; text-align: center;'>"
                . $tabela[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function color_generator() {
    return rand(0,255) . ", " . rand(0,255) . ", " . rand(0,255);;
}


function izpisi2($tabela, $n) {
    $barve = [color_generator(), color_generator(), color_generator()];

    echo "<h2>Tabela velikosti $n x $n</h2>";
    echo "<table style='border-collapse: collapse;'>";

    for ($i = 0; $i < $n; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $n; $j++) {
            if ($i < $j) {
                echo "<td style='width: 30px; height: 30px; border: 1px solid black; text-align: center; background-color: rgb($barve[0]);'>"
                . $tabela[$i][$j] . "</td>";
            }
            elseif ($i > $j) {
                echo "<td style='width: 30px; height: 30px; border: 1px solid black; text-align: center; background-color: rgb($barve[1]);'>"
                . $tabela[$i][$j] . "</td>";
            }
            else {
                echo "<td style='width: 30px; height: 30px; border: 1px solid black; text-align: center; background-color: rgb($barve[2]);'>"
                . $tabela[$i][$j] . "</td>";
            }
            
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

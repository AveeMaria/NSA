<?php
require "podatki4.php";
require "funkcije4.php";

$tab3 = indeksiBarv($tab);

echo "<h3>Pokončni izpis tabele:</h3>";
izpisiPokoncno($tab3);

echo "<h3>Ležeči izpis tabele:</h3>";
izpisiLezece($tab3);
?>
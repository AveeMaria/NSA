<?php
require_once 'funkcijeBeseda.php';

$beseda = makebeseda(10);
echo $beseda;


$samoglasniki = "";
$soglasniki = "";


bannanaSplit();
echo "<br><br><br>samoglasniki (" , strlen($samoglasniki) , "): $samoglasniki<br>";
echo "<br>soglasniki (" , strlen($soglasniki) , "): $soglasniki<br>";

?>

<?php
require_once 'data_amerika.php';

function izpis1() {
	global $amerika;

	//$amerika = ksort($amerika);//to sam sorta in returna true za sukses
	ksort($amerika);

	echo "<table>";
	echo "<tr>
		<th>Kraj</th>
		<th>Kratica drzave</th>
		<th>St. prebivalcev</th>
	</tr>";
	foreach ($amerika as $mesto => $podatki) {
		echo "<tr>";
		
		echo "<td>$mesto</td>";
		echo "<td>" , $podatki["drzava"] , "</td>";
		echo "<td>" , $podatki["prebivalci"] , "</td>";

		echo "</tr>";
	}
	echo "</table>";

	echo "<style>
	table {
		border-collapse: collapse;
	}
	td, th {
		border: solid 1px;
	}		
	</style>";
}

$zvezneDrzave = narediZvezneDrzave();

//ker founding father
function narediZvezneDrzave() {
	global $amerika;

	$zvezneDrzave = array();

	foreach($amerika as $mesto => $podatki) {
		$zvezneDrzave[$podatki["drzava"]][$mesto] = $podatki["prebivalci"];
	}

	ksort($zvezneDrzave);

	//descending sort po krajih, a = asociative da ne normalizir tabele
	foreach($zvezneDrzave as $kratica => &$kraji) {
		arsort($kraji);
	}

	return $zvezneDrzave;
}


function izpisiTabelo() {
	global $zvezneDrzave;

	echo "<table>";

	foreach($zvezneDrzave as $drzava => $mesta) {
		echo "<tr>";
		echo "<th colspan='2'>$drzava</th>";
		echo "</tr>";

		foreach($mesta as $ime => $prebivalci) {
			echo "<tr>";
			echo "<td>$ime</td><td>$prebivalci</td>";
			echo"</tr>";
		}
		
	}
	echo "</table>";
	
	echo "<style>
	table {
		border:solid 1px;
		border-collapse: collapse;
	}
	td,th {
		border:solid 1px;
		text-align: center;
	}
	</style>";
}

function isci($zacetnica) {
	global $amerika;

	echo "<br><table>";
	echo "<tr><th colspan='3'>Seach result for $zacetnica</th></tr>";
	foreach($amerika as $kraj => $podatki) {
		if($kraj[0] === $zacetnica) {
			echo "<tr><td>" , $kraj , "</td>";
			echo "<td>" , $podatki["drzava"] , "</td>";
			echo "<td>" , $podatki["prebivalci"] , "</td></tr>";
		}
	}
	echo "<table><br>";
}

?>

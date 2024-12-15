<?php

function findNajvecjiSubarray() {
	global $tocke;

	echo "<br>najvec ma: ";
	
	$barva = "";
	$max = 0;

	foreach ($tocke as $i => $v) {
		if($max < sizeof($i)) {
			$max = sizeof($i);
			$barva = $tocke;
		}
	}

	echo "$barva<br>";
}

function dodajTocke($st_tock) {
	global $tocke;
	for($i = 0; $i < $st_tock; $i++) {
		$x = rand(-9,9);
		$y = rand(-9,9);

		echo "x: $x, y: $y<br>";

		//0 je poz?

		if($x >= 0 && $y >= 0) {
			$kljuc = "red";
		}
		else if($x >= 0 && $y <= 0) {
			$kljuc = "green";
		}
		else if($x <= 0 && $y >= 0) {
			$kljuc = "blue";
		}
		else  {
			$kljuc = "silver";
		}

		$tocke[$kljuc][] = [$x, $y];
	}
}


function izpisiTabelo() {
	global $tocke;

	echo "<table>";
	foreach($tocke as $barva => $tocka) {
		echo "<tr>";

		foreach($tocka as $neki => $koordinate) {
			echo "<td style='color: $barva'>";
			echo "$koordinate[0], $koordinate[1]";
			echo "</td>";
		}
		echo "</tr>";
	}

	echo "</table>";

	echo "<style>
	table {
		border-collapse: collapse;
	}
	td {
	border-collapse: collapse;
		border: solid black 1px;
	}
	</style>";
}
?>

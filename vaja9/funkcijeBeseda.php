<?php

function makebeseda($len) {
	$vrvica = "";

	for($i = 0; $i < $len; ++$i)  {
		//to je za velke crke:
		//$vrvica.=chr(rand(0,25) + 65 + 32 * rand(0,1));
		$vrvica.=chr(rand(97,122));
	
	}
	
	return $vrvica;
}

function bannanaSplit() {
	global $beseda;
	//$beseda = "aaaeeeiiioouuu";

	global $samoglasniki;
	global $soglasniki;

	for($i = 0; $i < strlen($beseda); ++$i) {
		switch($beseda[$i]) {
			case 'a':
			case 'e':
			case 'i':
			case 'o':
			case 'u':
				$samoglasniki .= $beseda[$i];
				break;
			default:
				$soglasniki .= $beseda[$i];
		}
	}

	//jaful brez if stavkov??
	$samoglasniki === "" && $samoglasniki="NA";
	$soglasniki === "" && $soglasniki="NA";
}

?>

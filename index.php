<?php

	// Somme d�sir�e
	// Nombre d'�ssais max
	// Somme n�cessaire
	// Perte
	$sommeDesiree = 20;
	$nbEssaisMax = 7;
	$perte = 0;
	
	echo "<pre>";
	echo "Vous voulez gagner " . $sommeDesiree . ".- sur un maximum de " . $nbEssaisMax . " essais !" . PHP_EOL;
	echo "Vous gagnez " . $sommeDesiree . ".- au total si vous gagnez � l'un de vos " . $nbEssaisMax . " essais." . PHP_EOL . PHP_EOL;
	
	$perte = 0;
	for ($i = 0; $i < $nbEssaisMax; $i++) {
		$mise = $perte + $sommeDesiree;
		$perte += $mise;
		echo "Essai " . ($i + 1) . " : il faut miser " . ($mise) . "." . PHP_EOL;
		echo "Si vous perdez, vous avez perdu au total : " . $perte . PHP_EOL;
	}
	echo PHP_EOL . "Pour jouer selon ce sch�ma, vous devez rassembler la somme de " . $perte . ".-" . PHP_EOL;
	echo "Votre probabilit� de perdre est de 1 chance sur " . pow(2, $nbEssaisMax) . PHP_EOL;
	echo "</pre>";
?>
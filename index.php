<?php

	if (isset($_GET['submit'])) {
		$sommeDesiree = $_GET['somme'];
		$nbEssaisMax = $_GET['nbessais'];
		$perte = 0;
		
		echo "<pre>";
		echo "Vous voulez gagner " . $sommeDesiree . ".- sur un maximum de " . $nbEssaisMax . " essais !" . PHP_EOL;
		echo "Vous gagnez " . $sommeDesiree . ".- au total si vous gagnez à l'un de vos " . $nbEssaisMax . " essais." . PHP_EOL . PHP_EOL;
		
		$perte = 0;
		for ($i = 0; $i < $nbEssaisMax; $i++) {
			$mise = $perte + $sommeDesiree;
			$perte += $mise;
			echo "Essai " . ($i + 1) . " : il faut miser " . ($mise) . "." . PHP_EOL;
			echo "Si vous perdez, vous avez perdu au total : " . $perte . PHP_EOL;
		}
		echo PHP_EOL . "Pour jouer selon ce schéma, vous devez rassembler la somme de " . $perte . ".-" . PHP_EOL;
		echo "Votre probabilité de perdre est alors de 1 chance sur " . pow(2, $nbEssaisMax) . PHP_EOL . PHP_EOL;
		echo "<a href=\".\" title=\"\">Recommencer</a>";
		echo "</pre>";
	}
	else {
?><!DOCTYPE html>
<html>
	<head>
		<title>Tets mart</title>
		<style type="text/css">
			html, body {
				font-family:monospace;
			}
			label {
				display:inline-block;
				width:70px;
			}
		</style>
	</head>
	<body>
		<script type="text/javascript">
			calc = function () {
				if (document.getElementById('somme').value == '' || document.getElementById('nbessais').value == '') return false;
				else return true;
			}
		</script>
		<form id="f" action="." method="GET" onsubmit="return calc();">
			<p><label for="somme">Somme :</label> <input id="somme" type="text" name="somme" value="" placeholder="Somme désirée"/></p>
			<p><label for="nbessais">Essais :</label> <input id="nbessais" type="text" name="nbessais" value="" placeholder="Nombre d'éssais max."/></p>
			<p><input type="submit" name="submit" value="Calculer"/></p>
		</form>
	</body>
</html>
<?php } ?>
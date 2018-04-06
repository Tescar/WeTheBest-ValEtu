<?php
	
	include("connexion.php");
	include("Manager.php");
	
	$operation = $_POST["operation"];
	
	switch($operation){
		case "authentifier":
			$codeEtudiant = $_POST["codeEtudiant"];
			authentifier($connection, $nom);
			break;
		case "lister":
			lister($connection);
			break;
			
		case "valider":
			valider($connection);
			break;
		default:
			echo "Aucune operation sélectionnée";
		break;
	}

function lister($connection){
		$manager = new Manager($connection);
		$resultat = $manager->lister();
		print_r(json_encode($resultat));
	}
	function valider($connection){
		$manager = new Manager($connection);
		$resultat = $manager->lister();
		print_r(json_encode($resultat));
	}
	
?>
<?php


if($_POST["val"]=="annuler"){
	
	header("Location:index.php");
}

if($_POST["val"]=="valider"){
	
	header("Location:valider.php");
}

if($_POST["val"]=="reprise"){
	
	header("Location:reprise.php");
}

if($_POST["val"]=="demie"){
	
	header("Location:demie.php");
}

?>
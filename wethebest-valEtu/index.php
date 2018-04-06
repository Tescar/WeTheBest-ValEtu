
<?xml version="1.0" encoding="utf-8"?>

<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml-strict.dtd" >
<html xmlns="http://www.w3.org//1999/xhtml" xml:lang="fr"
lang:="fr">


<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scole=1.0"> 
	<title> Validation</title>

	<!--css-->
	<link rel="stylesheet" type="text/css" href="css/design.css">
	<link rel="stylesheet" type="text/css" href="css/dekstop.css">
	<link type="text/css" rel="stylesheet" media="all" title="CSS" href="styleInd.css" />
   
</head>
	
	<!--contenu de l page-->
<body>

	<div id="content">
		<!--header-->
		<?php include("entete.php") ?>
		<div class="clear"></div>
		<!--fin header-->


		<!--slider-->
		<div class="site-content">
				<?php include("slider.php") ?>
			<!--fin slider-->


			<!--interface de connexion-->
			<div id="corps">
			<!--boutons-->
             <div id="corpsform">
					<form method="POST" action="authentifier.php" enctype="multipart/form-data">
						<img id="image" src="photos/01.jpg">
						<fieldset class="designB">
							<legend>Que voulez-vous faire?</legend>
							<button id="test1" type="submit">Demarrer</button>
							<a  id="test2" href="imprimer.html"><img id="print" src="photos/printer.png"> </a>
						</fieldset>
						
					</form>
				</div>


			</div>
			<!--fin de l'interface de connexion-->

				<div class="clear"></div>

			<!--footer-->
				<?php include("pieddepage.php") ?>

				<!--<footer class="second">Developpe par We the Best</footer>-->

				<div class="clear"></div>
			<!--fin footer-->
		</div>
	</div>
	<!--fin contenu de la page-->

</body>
</html>

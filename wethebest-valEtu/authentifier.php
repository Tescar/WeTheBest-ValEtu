
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

		
   
</head>
	
	<!--contenu de la page-->
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
					<form enctype="multipart/form-data" method ="POST" action="rechercher.php">
      <ul>
        
        <li>
          <p class="left">
            <label for="first_name">Entrer votre code</label>
            <input type="text" name="code" placeholder="code Etudiant" />
          
        </li>
        
     
          <input class="btn" type="submit" value="Ok" />
          <small>ou presser la touche <strong>enter</strong></small>
        </li>
		
      </ul>
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
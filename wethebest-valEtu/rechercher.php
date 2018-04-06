<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scole=1.0"> 
	<title> test</title>
	
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
			<div id="corps">


<?php

session_start();

$code = $_POST["code"];
$idCon = @mysql_connect("127.0.0.1","root","");
if(!$idCon){
  echo "Erreur d'ouverture de la connexion";
  exit(0);
}
$ids = @mysql_select_db("valedu",$idCon);
if(!$ids){
  echo "Erreur de selection de la base";
  exit(0);
}
$requete ="select * from etudiant Where codeEtudiant= '$code'";
$results = @mysql_query($requete,$idCon); 
if(!$results){
  echo "Erreur d'acces a la base";
  exit(0);
}

if($ligne = mysql_fetch_array($results)){
 $code = $ligne["codeEtudiant"];$nom = $ligne["nom"]; $prenom = $ligne["prenom"]; $niveau = $ligne["niveau"];
  $vacation = $ligne["vacation"]; $departement = $ligne["departement"]; $photo = $ligne["photo"];

  $_SESSION['code']=$code;
 
$_SESSION['nom']=$nom;
$_SESSION['prenom']=$prenom;
$_SESSION['niveau']=$niveau;
$_SESSION['vacation']=$vacation;
$_SESSION['departement']=$departement;
$_SESSION['photo']=$photo;

?> 

<table align="center">
<caption><h1> UNIVERSITE INUKA</h1></caption>
<tr> 
<td> 	CODE ETUDIANT:           <?php echo"$code"; ?></td>
 <td rowspan=5> <center><?php echo "<img src='mesImages/$photo' width=200>";?></center> </td>
</tr>

<tr> 
<td>NOM: <?php echo "$nom";?></td>
</tr>

<tr> 
<td>PRENOM: <?php echo "$prenom";?></td>
</tr>

<tr> 
<td>DEPARTEMENT: <?php echo"$departement"; ?></td>
</tr>

<tr> 
<td>NIVEAU:  <?php echo"$niveau"; ?></td>
</tr>

<tr> 
<td>VACATION: <?php echo"$vacation"; ?></td>
</tr>
</table>


<form enctype="multipart/form-data" method="POST" action="gestion.php">

<div class="designc">
<h3>CHOISISSEZ L'OPERATION VOULUE</h3>
<button id="test1" type="submit" name="val" value="valider">VALIDER</button>
<button id="test1" type="submit" name="val" value="reprise">REPRISE</button>
<button id="test1" type="submit" name="val" value="demie">DEMIE BOURSE</button>
<button id="test1" type="submit" name="val" value="annuler">ANNULER</button>
</div>
</form>


<?php
}

else{
	echo "<h1>code non trouve!</h1>";
}

$t = mysql_close($idCon);
if(!$t){
  echo "Erreur fermeture de la connexion";
}

?>

</div>

<?php include("pieddepage.php") ?>

				<!--<footer class="second">Developpe par We the Best</footer>-->

				<div class="clear"></div>
			<!--fin footer-->
		</div>
	</div>
	<!--fin contenu de la page-->

</body>
</html>
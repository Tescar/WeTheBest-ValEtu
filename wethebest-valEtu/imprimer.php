<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scole=1.0"> 
	<title> test</title>
	
	<link rel="stylesheet" type="text/css" href="css/design.css">
	<link rel="stylesheet" type="text/css" href="css/dekstop.css">

	<script>
	function printContent(el){
		
		var restorepage = document.body.innerHTML;
		var printContent = document.getElementById(el).innerHTML;
		document.body.innerHTML =printContent;
		window.print();
		document.body.innerHTML = restorepage;
	}
	</script>
	
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

$transac = $_POST["transac"];
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
$requete ="select * from valider Where code_Transaction= '$transac'";
$results = @mysql_query($requete,$idCon); 
if(!$results){
  echo "Erreur d'acces a la base";
  exit(0);
}

if($ligne = mysql_fetch_array($results)){
 $code = $ligne["codeEtudiant"];$nom = $ligne["nom"]; $prenom = $ligne["prenom"]; $niveau = $ligne["niveau"];
  $vacation = $ligne["vacation"]; $departement = $ligne["departement"]; $photo = $ligne["photo"];
  $montant = $ligne["montant"]; $transac = $ligne["code_Transaction"];


?> 

<div id="div1">
<table align="center">
<caption><h3> UNIVERSITE INUKA</h3></caption>
<tr> 
<td> 	CODE ETUDIANT:           <?php echo"$code"; ?></td>
 <td> TRANSACTION NO.<?php echo "$transac";?> </td>
</tr>

<tr> 
<td>NOM: <?php echo "$nom";?></td>
<td rowspan=4> <center><?php echo "<img src='mesImages/$photo' width=200>";?></center> </td>
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
<td>MONTANT: <?php echo"$montant"; ?></td>
</tr>
</table>
<p> 
NB: la direction de l'etablissement n'accepte aucune negociation de remboursement une fois les frais de scolarite</br>
payes. les frais d'obligation a la rentree n'incluent pas le mensualite qui se paie entre le 1er et le 10 de chaque mois
</p>
</div>
<button onclick="printContent('div1')">Imprimer le contenu </button>

<?php
}

else{
	echo "<h1>code Transaction non trouve!</h1>";
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
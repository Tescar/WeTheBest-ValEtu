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

$photo=$_SESSION['photo'];
?>

<table align="center">
<caption><h1> UNIVERSITE INUKA</h1></caption>
<tr> 
<td> 	CODE ETUDIANT:           <?php echo $_SESSION['code']; ?></td>
 <td rowspan=5> <center><?php echo "<img src='mesImages/$photo' width=200>";?></center> </td>
</tr>

<tr> 
<td>NOM: <?php echo $_SESSION['nom'];?></td>
</tr>

<tr> 
<td>PRENOM: <?php echo $_SESSION['prenom'];?></td>
</tr>

<tr> 
<td>DEPARTEMENT: <?php echo $_SESSION['departement']; ?></td>
</tr>

<tr> 
<td>NIVEAU:  <?php echo $_SESSION['niveau']; ?></td>
</tr>

<tr> 
<td>VACATION: <?php echo $_SESSION['vacation']; ?></td>
</tr>
</table>

</br>

<h1> REPRISE EN COURS...</h1>
</div>
</form>

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
<?php


if($_POST["val"]=="enregistrer"){
	
for($i=0;$i<=8000;$i++)
{
$code['chcode']=rand(10,8000);
}
foreach($code as $cles=>$val)

$montant=$_POST['montant'];

session_start();


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
  $code=$_SESSION['code'];
	  $nom=$_SESSION['nom'];
	
$pre=$_SESSION['prenom'];
$niv=$_SESSION['niveau'];
$vac=$_SESSION['vacation'];
$depart=$_SESSION['departement'];
$pho=$_SESSION['photo'];

$requete ="insert into valider(codeEtudiant,nom,prenom,niveau,vacation,departement,photo,montant,code_Transaction)";
 $requete .="values(' $code','$nom','$pre','$niv','$vac','$depart','$pho','$montant','$val')";
$results = @mysql_query($requete,$idCon); 
if(!$results){
  echo "Erreur d'acces a la base";
  exit(0);
}
else{
	
	echo"insertion reussie";
	echo"votre code de transaction est: $val";
	


}

}

if($_POST["val"]=="imprimer"){
	
	echo"CETTE PAGE N'EST PAS ENCORE PRETE";
}


?>
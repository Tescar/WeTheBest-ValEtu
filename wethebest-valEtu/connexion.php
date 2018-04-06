<?php
	try{
		$connection = new PDO('mysql:host = localhost; dbname=valEtu','root','');
		//$connection = new PDO('mysql:host = 172.20.10.3; dbname=valEtu','root','');
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>
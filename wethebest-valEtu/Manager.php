<?php
	class Manager{
		private $connection;
		
		public function __construct($connection){
			$this->connection = $connection;
		}
		
		public function authentifier($codeEtuidiant){
			$requete=$this->connection->prepare("select * from etudiant Where codeEtuidiant= '$codeEtuidiant'");
			
			return $requete->execute();
		}
		
		public function lister(){
			$requete = $this->connection->query('SELECT * FROM etudiant');
			$requete  = $requete ->fetchAll();
			
			return $requete ;
		}
		
		public function valider(){
			$requete  = $this->connection->query('SELECT * FROM etudiant');
			$requete  = $requete ->fetchAll();
			
			return $requete ;
		}
	}
?>
<?php
	class Conectar{
		protected $dbh;
		
		protected function Conexion(){
			try{
				//$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=webservice","root","");
				$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=intercon_webservice","intercon_webservice","W3bs3rc1c3+");
				return $conectar;
			}catch(Exception $e){
				print "Error DB: ".$e->getMessage()."<br/>";
				die();
			}
		}
		
		public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
		}
		
	}
?>
<?php


	
	class Conexao {

		private $host = 'localhost';
		private $dbname = 'seu_bd';
		private $user = ''; //adicionar usuario
		private $pass = ''; //adicionar senha

		public function conectar() { 
			try {

				$conexao = new PDO(
					"mysql:host=$this->host;dbname=$this->dbname",
					"$this->user",
					"$this->pass"
				);

				return $conexao;

			} catch(PDOException $e) {
				echo '<p>'.$e->getMessege().'</p>'; 
			}
		}
	}
?>
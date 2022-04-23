<?php

class Conexao {

	private $host = '127.0.0.1';
	private $dbname = 'proj_web_bicuiba';
	private $user = 'root';
	private $pass = 'password';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessage().'</p>';
		}
	}
}

?>
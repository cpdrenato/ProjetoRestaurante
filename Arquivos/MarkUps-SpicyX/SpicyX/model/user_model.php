<?php

class User {
	private $id;
	private $email;
	private $password;
	private $createdAt;
    private $isActive;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
		return $this;
	}
}

?>
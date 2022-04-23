<?php

class User {
	private $id;
	private $descricao;
	private $img;
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
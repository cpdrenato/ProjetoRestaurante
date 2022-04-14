<?php

class Contato {
	private $id;
	private $name;
	private $email;
	private $assunto;
    private $mensagem;
	private $createdAt;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
		return $this;
	}
}

?>
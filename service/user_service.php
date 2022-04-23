<?php


//CRUD
class UserService {

	private $conexao;
	private $user;
	private $name;
	private $email;
	private $assunto;
	private $mensagem;

	public function __construct(Conexao $conexao, User $user) {
		$this->conexao = $conexao->conectar();
		$this->user = $user;
	}

	public function inserir() { //create
		$dateTime = date('Y-m-d H:i:s', time());
		$query = 'insert into user (email, password, createdAt) values (:email,:password:createdAt)';
		// $query = 'insert into contato (name, email, assunto, mensagem) values (name,email,assunto,mensagem)';
		// $query = 'insert into contato(tarefa)values(:tarefa)';
		$stmt = $this->conexao->prepare($query);

        $stmt->bindValue(':email', $this->user->__get('email'));
        $stmt->bindValue(':password', $this->user->__get('password'));
        $stmt->bindValue(':createdAt', $dateTime);
		$stmt->execute();

		// echo '<p>'.$this->contato->__get('mensagem').'</p>';
	}

	public function recuperar() { //read
		$query = 'select * from user';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function atualizar() { //update

		$query = "update tb_tarefas set tarefa = ? where id = ?";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->tarefa->__get('tarefa'));
		$stmt->bindValue(2, $this->tarefa->__get('id'));
		return $stmt->execute(); 
	}

	public function remover() { //delete

		$query = 'delete from contato where id = :id';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id', $this->contato->__get('id'));
		$stmt->execute();
	}
}

?>
<?php


//CRUD
class ContatoService {

	private $conexao;
	private $contato;
	private $name;
	private $email;
	private $assunto;
	private $mensagem;

	public function __construct(Conexao $conexao, Contato $contato) {
		$this->conexao = $conexao->conectar();
		$this->contato = $contato;
	}

	public function inserir() { //create
		$dateTime = date('Y-m-d H:i:s', time());
		$query = 'insert into contato (name, email, assunto, mensagem, createdAt) values (:name,:email,:assunto,:mensagem,:createdAt)';
		// $query = 'insert into contato (name, email, assunto, mensagem) values (name,email,assunto,mensagem)';
		// $query = 'insert into contato(tarefa)values(:tarefa)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':name', $this->contato->__get('name'));
		$stmt->bindValue(':email', $this->contato->__get('email'));
		$stmt->bindValue(':assunto', $this->contato->__get('assunto'));
		$stmt->bindValue(':mensagem', $this->contato->__get('mensagem'));
		$stmt->bindValue(':createdAt', $dateTime );
		echo '<p>'.$this->contato->__get('mensagem').'</p>';
		$stmt->execute();
	}

	public function recuperar() { //read
		$query = 'select * from contato';
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

	public function marcarRealizada() { //update

		$query = "update tb_tarefas set id_status = ? where id = ?";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->tarefa->__get('id_status'));
		$stmt->bindValue(2, $this->tarefa->__get('id'));
		return $stmt->execute(); 
	}

	public function recuperarTarefasPendentes() {
		$query = '
			select 
				t.id, s.status, t.tarefa 
			from 
				tb_tarefas as t
				left join tb_status as s on (t.id_status = s.id)
			where
				t.id_status = :id_status
		';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
}

?>
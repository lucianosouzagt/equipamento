<?php
class Embarque extends Model {

	public function getAllEmbarque() {
		$array = array();
		
		$sql = "SELECT embarques.id,
					   equipamentos.bp, 
					   equipamentos.sn, 
					   equipamentos.marca, 
					   equipamentos.modelo, 
					   funcionarios.name,
					   data_emb AS data,
					   solicitante
		FROM embarques, equipamentos, funcionarios
		WHERE embarques.funcionario_id = funcionarios.id AND
			  embarques.equipamento_id = equipamentos.id AND
			  embarques.situacao = 1";
		$sql = $this->db->query($sql);
		
		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getAllHistoricoEmbarque() {
		$array = array();
		
		$sql = "SELECT embarques.id,
					   equipamentos.bp, 
					   equipamentos.sn, 
					   equipamentos.marca, 
					   equipamentos.modelo, 
					   funcionarios.name,
					   data_emb AS data,
					   solicitante
		FROM embarques, equipamentos, funcionarios
		WHERE embarques.funcionario_id = funcionarios.id AND
			  embarques.equipamento_id = equipamentos.id AND
			  embarques.situacao = 0";
		$sql = $this->db->query($sql);
		
		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	private function verifyEmbarque($id, $func){

		return true;
	}
	public function addEmbarque($id, $func, $solicitante) {
		
		if ($this->verifyEmbarque($id, $func)) {
			$sql = "INSERT INTO embarques (funcionario_id, equipamento_id, data_emb, solicitante)VALUES (:func, :idequi, now(), :solicitante)";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":func",$func);
			$sql->bindValue(":idequi",$id);
			$sql->bindValue(":solicitante",$solicitante);;
			$sql->execute();

			$sql = "UPDATE equipamentos SET embarque = 1 WHERE id = :idequi";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':idequi', $id);
			$sql->execute();

			$sql = "UPDATE funcionarios SET embarque = 1 WHERE id = :idfunc";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':idfunc', $func);
			$sql->execute();

		} else {
			return false;
		}

	}

	private function getEmbarque($id) {
		$array = array();
		
		$sql = "SELECT * FROM embarques WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		
		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function desembarque($id){

		$data['info'] = $this->getEmbarque($id);
		$func = $data['info']['funcionario_id'];
		$equi = $data['info']['equipamento_id'];


		$sql = "UPDATE embarques SET situacao = 0, data_des = now() WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		$sql = "UPDATE funcionarios SET embarque = 0 WHERE id = :func";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':func', $func);
		$sql->execute();

		$sql = "UPDATE equipamentos SET embarque = 0 WHERE id = :equi";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':equi', $equi);
		$sql->execute();

		return true;
	}

	private function verifyFuncionario($chapa){

		return true;
	}

	public function addFuncionario($chapa, $name, $cpf, $rg, $email) {

		if ($this->verifyFuncionario($chapa)) {
			$sql = "INSERT INTO funcionarios (chapa, name, cpf, rg, email) VALUES (:chapa, :name, :cpf, :rg, :email)";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":chapa",$chapa);
			$sql->bindValue(":name",$name);
			$sql->bindValue(":cpf",$cpf);
			$sql->bindValue(":rg",$rg);
			$sql->bindValue(":email",$email);
			$sql->execute();

		} else {
			return false;
		}

	}

	public function getAllFuncionarios() {
		$array = array();
		
		$sql = "SELECT * FROM funcionarios WHERE embarque = 0";
		$sql = $this->db->query($sql);
		
		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;

	}

	public function getFuncionarios($id) {
		$array = array();
		
		$sql = "SELECT * FROM funcionarios WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id",$id);
		$sql->execute();
		
		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;

	}



	public function mailEmbarque($email, $func, $cpf, $rg, $modelo, $bp, $sn, $data) {
		$para = $email;
		$assunto = "Empréstimo de Equipamento";
		$cc = array(
			'luciano.souza@sparrowsbsm.com.br',
			'logistica@sparrowsbsm.com.br'
		);
		$msg = "Prezados!\r\n

				No dia ".$data." o(a) colaborador(a) ".$func." portador(a) do CPF: ".$cpf." e do RG: ".$rg." retirou do Setor de Tecnologia da Informação o(s) seguinte(s) equipamento(s):\r\n

     			DESCRIÇÃO: ".$modelo.", BP: ".$bp.", N/S: ".$sn."\r\n

				Atte.\r\n
				Setor de Tecnologia da Informação"\r\n;
		$corpo = "Nome: ".$func." - E-mail: ".$email." - Mensagem: ".$msg;
		$cabecalho = "From: suporte@etm.srv.br\r\n".
					 "Reply-To: ".$para."\r\n".
					 "X-Mailer: PHP/".phpversion();

		mail($para, $assunto, $corpo, $cabecalho);
		return true;

	}

	public function mailDesembarque($email, $func, $cpf, $rg, $modelo, $bp, $sn, $data) {
		$para = $email;
		$assunto = "Empréstimo de Equipamento";
		$cc = array(
			'luciano.souza@sparrowsbsm.com.br',
			'logistica@sparrowsbsm.com.br'
		);
		$msg = "Prezados!

				No dia ".$data." o(a) colaborador(a) ".$func." portador(a) do CPF: ".$cpf." e do RG: ".$rg." entregou do Setor de Tecnologia da Informação o(s) seguinte(s) equipamento(s):

     			DESCRIÇÃO: ".$modelo.", BP: ".$bp.", N/S: ".$sn."

				Atte.
				Setor de Tecnologia da Informação";
		$corpo = "Nome: ".$func." - E-mail: ".$email." - Mensagem: ".$msg;
		$cabecalho = "From: suporte@etm.srv.br\r\n".
					 "Reply-To: ".$para."\r\n".
					 "X-Mailer: PHP/".phpversion();

		mail($para, $assunto, $corpo, $cabecalho);
		return true;
	}
}

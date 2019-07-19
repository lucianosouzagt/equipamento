<?php
class Equipamentos extends Model {

	public function getAllEquipamentos(){
		$array = array();
		
		$sql = "SELECT * FROM equipamentos WHERE embarque = 0";
		$sql = $this->db->query($sql);
		
		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getEquipamento($id){
		$array = array();
		
		$sql = "SELECT * FROM equipamentos WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id",$id);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getAllEquiEmb(){
		$array = array();
		
		$sql = "SELECT * FROM equipamentos WHERE embarque = 1";
		$sql = $this->db->query($sql);
		
		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	private function verifyEquipamento($bp){

		return true;
	}

	public function addEquipamento($bp, $sn, $marca, $modelo, $data) {

		if ($this->verifyEquipamento($bp)) {
			$sql = "INSERT INTO equipamentos (bp, sn, marca, modelo, data)VALUES (:bp, :sn, :marca, :modelo, :data)";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":bp",$bp);
			$sql->bindValue(":sn",$sn);
			$sql->bindValue(":marca",$marca);
			$sql->bindValue(":modelo",$modelo);
			$sql->bindValue(":data",$data);
			$sql->execute();

		} else {
			return false;
		}

	}

	
}
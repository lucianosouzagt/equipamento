<?php
class Users extends Model {

	private $info;

	public function verifyUser($user, $pass) {

		$sql = "SELECT * FROM usuarios WHERE user = :user AND pass = :pass OR email = :email AND pass = :pass";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":user", $user);
		$sql->bindValue(":email", $user);
		$sql->bindValue(":pass", md5($pass));
		$sql->execute();

		if ($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function createToken($user) {
		$token =  md5(rand(0,9999).time());

		$sql = "UPDATE usuarios SET token = :token WHERE user = :user OR email = :email";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":token", $token);
		$sql->bindValue(":user", $user);
		$sql->bindValue(":email", $user);
		$sql->execute();

		return $token;
	}

	public function checkLogin() {
		if (!empty($_SESSION['token'])) {
			$token = $_SESSION['token'];

			$sql = "SELECT * FROM usuarios where token = :token";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":token", $token);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				$this->info = $sql->fetch();

				return true;
			}
		}

		return false;
	}
}
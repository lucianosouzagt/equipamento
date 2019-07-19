<?php
class loginController extends Controller {

	public function index() {
		$data = array(
			'msg' => '');

		if (!empty($_POST['user'])) {
			$user = $_POST['user'];
			$pass = $_POST['pass'];

			$users = new Users();
			if ($users->verifyUser($user, $pass)) {
				$token = $users->createToken($user);
				$_SESSION['token'] = $token;

				header("Location: ".BASE_URL);
			} else {
				$data['msg'] = 'Número e/ou senha errados!';
			}

		}
		$this->loadTemplate('login', $data);
	}

	public function logout() {
		unset($_SESSION['token']);
		header("Location: ".BASE_URL);
		exit;

	}
}
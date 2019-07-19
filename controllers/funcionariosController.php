<?php
class funcionariosController extends Controller {

	private $user;

	public function __construct() {
		parent::__construct();

		$this->user = new Users();
		if (!$this->user->checkLogin()) {
			header("Location: ".BASE_URL."login");
			exit;
		}
	}

    public function index() {
        $data = array();


        $this->loadTemplate('funcionarios', $data);
    }

    public function addfunc() {
        $data = array();
        $e = new Embarque();

        if (!empty($_POST['name'])) {
       		$chapa = filter_input(INPUT_POST,'chapa', FILTER_VALIDATE_INT);
			$name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_STRING);
			$cpf = filter_input(INPUT_POST,'cpf', FILTER_SANITIZE_STRING);
			$rg = filter_input(INPUT_POST,'rg', FILTER_SANITIZE_STRING);
			$email = $_POST['email'];

			if ($chapa && $name && $cpf && $rg && $email) {
				$e->addFuncionario($chapa, $name, $cpf, $rg, $email);
			
				header("Location: ".BASE_URL);
			} else {
				$data['wanrning'] = 'Digite os campos corretamente.';
			}
		}

        $this->loadTemplate('addfunc', $data);
    }
}
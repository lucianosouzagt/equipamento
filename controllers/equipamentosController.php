<?php
class equipamentosController extends Controller {

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


        $this->loadTemplate('equipamentos', $data);
    }

    public function addequi() {
        $data = array();
        $e = new Equipamentos();

        if (!empty($_POST['bp'])) {
       		$bp = filter_input(INPUT_POST,'bp', FILTER_VALIDATE_INT);
			$sn = filter_input(INPUT_POST,'sn', FILTER_SANITIZE_STRING);
			$marca = filter_input(INPUT_POST,'marca', FILTER_SANITIZE_STRING);
			$modelo = filter_input(INPUT_POST,'modelo', FILTER_SANITIZE_STRING);
			$data = $_POST['date'];
			

			if ($bp && $sn && $marca && $modelo && $data) {
				$e->addEquipamento($bp, $sn, $marca, $modelo, $data);
			
				header("Location: ".BASE_URL);
			} else {
				$data['wanrning'] = 'Digite os campos corretamente.';
			}
		}

        $this->loadTemplate('addequi', $data);
    }
}
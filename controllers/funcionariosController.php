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


        $this->loadTemplate('addfunc', $data);
    }
}
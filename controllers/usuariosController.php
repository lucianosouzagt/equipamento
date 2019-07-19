<?php
class usuariosController extends Controller {

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


        $this->loadTemplate('usuarios', $data);
    }

    public function adduser() {
        $data = array();


        $this->loadTemplate('adduser', $data);
    }
}
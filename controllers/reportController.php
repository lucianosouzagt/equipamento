<?php
class reportController extends Controller {

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
		
		$this->loadTemplate('report', $data);
	}
}
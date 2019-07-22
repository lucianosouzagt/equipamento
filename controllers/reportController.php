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

	}
	public function reportemb() {
		$data = array();
		$e =new Embarque();

        $data['list'] = $e->getAllEmbarque();
		
		$this->loadView('reportEmb', $data);
	}

	public function reportdesemb() {
		$data = array();
		$e =new Equipamentos();

        $data['list'] = $e->getAllEquipamentos();
		
		$this->loadView('reportDesemb', $data);
	}

	public function historico() {
		$data = array();
		$e =new Embarque();

        $data['list'] = $e->getAllHistoricoEmbarque();
		
		$this->loadView('historico', $data);
	}

}
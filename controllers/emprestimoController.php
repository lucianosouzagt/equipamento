<?php
class emprestimoController extends Controller {

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
        $e =new Equipamentos();

        $data['list'] = $e->getAllEquipamentos();

        $this->loadTemplate('emp', $data);
    }

    public function embarque($id) {
        $data = array();
        $e =new Equipamentos();
        $f =new Embarque();

        $data['list'] = $e->getEquipamento($id);
        $data['info'] = $f->getAllFuncionarios();


        if (!empty($_POST['func'])) {
            $func = filter_input(INPUT_POST,'func', FILTER_VALIDATE_INT);
            $solicitante = filter_input(INPUT_POST,'solicitante', FILTER_SANITIZE_STRING);
            $data['mail'] = $f->getFuncionarios($func);
            $email = $mail['email'];
            $nome = $mail['nome'];
            $cpf = $mail['cpf'];
            $rg = $mail['rg'];
            $modelo = $list['modelo'];
            $bp = $list['bp'];
            $sn = $list['sn'];
            date_default_timezone_set('America/Sao_Paulo');
            $date = date('Y-m-d');


            if ($id && $func && $solicitante) {
                $f->addEmbarque($id, $func, $solicitante);
                $f->mailEmbarque($email, $func, $cpf, $rg, $modelo, $bp, $sn);
                header("Location: ".BASE_URL);
            } else {
                $data['wanrning'] = 'Digite os campos corretamente.';
            }
        }


        $this->loadTemplate('embarque', $data);
    }

    public function desembarque($id) {
        $data = array();
        $e = new Embarque();

        $data['list'] = $e->getAllEmbarque();

        if (!empty($id)) {
           $e->desembarque($id);
            header("Location: ".BASE_URL."emprestimo/desembarque/");
        }

        $this->loadTemplate('desembarque', $data);
    }

}
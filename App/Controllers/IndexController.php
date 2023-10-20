<?php  

	namespace App\Controllers;

	use MF\Controller\Action;
	use App\Connection;
	// use App\Models\Usuarios;

	/**
	 * Controller das páginas padrões da aplicação
	*/
	class IndexController extends Action{

		public function index() {
			$this->data->links = array(
				'link1',
				'link2'
			);
			$this->data->scripts = array(
				'script1',
				'script2'
			)

			$this->render('index', 'mainLayout');
		}



		public function about() {

			$this->view->data = array('nome' => 'Guilherme', 'idade' => 19);
			$this->render('about', 'mainLayout');
		}
		
		
	}

?>
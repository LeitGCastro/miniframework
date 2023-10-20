<?php  

	namespace App\Controllers;

	use MF\Controller\Action;
	use App\Connection;

	/**
	 * 
	 */
	class IndexController extends Action{

		public function index() {

			$this->render('index', 'mainLayout');
		}

		public function about() {

			$this->view->data = array('nome' => 'Guilherme', 'idade' => 19);
			$this->render('about', 'mainLayout');
		}
		
		
	}

?>
<?php  

	namespace App\Controllers;

	use MF\Controller\Action;

	/**
	 * 
	 */
	class IndexController extends Action{

		public function index() {

			$this->render('index');
		}

		public function about() {

			$this->view->data = array('nome' => 'Guilherme', 'idade' => 19);
			$this->render('about');
		}
		
		
	}

?>
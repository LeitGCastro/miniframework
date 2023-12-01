<?php  

	namespace App\Controllers;

	use MF\Controller\Action;
	use App\Connection;
	// use App\Models\Usuarios;

	/**
	 * Controller das páginas padrões da aplicação
	*/
	class IndexController extends Action{

		protected $data;
		protected $links;
		protected $structure;
		protected $broadcrumb;

		// $this->broadcrumb->controller = 'Index';
		public function index() {
			$this->broadcrumb->page = 'Home';

			$this->structure->title = 'Home';

			$this->render('home');
		}


		public function about() {

			$this->structure->title = 'Sobre';

			$this->render('about');
		}		
		
		public function profile() {

			$this->structure->title = 'Perfil';
			$this->render('profile');

		}

	}
?>
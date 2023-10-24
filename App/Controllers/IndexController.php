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

			$this->render('index', 'mainLayout');
		}


		public function about() {

			$this->render('about', 'mainLayout');
		}		
		
	}
?>
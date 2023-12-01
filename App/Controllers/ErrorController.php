<?php  

	namespace App\Controllers;

	use MF\Controller\Action;
	use App\Connection;

	/**
	 * Controller das páginas padrões da aplicação
	*/
	class ErrorController extends Action{

		protected $data;
		protected $links;
		protected $structure;
		protected $broadcrumb;

		// Método base de erros
		public function notFound() {

			$this->structure->title = '404';

			$this->render('notFound', 'clear');
		}
	}
?>
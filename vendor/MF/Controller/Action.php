<?php  

	namespace MF\Controller;

	abstract class Action{

		protected $view;

		public function __construct(){
			$this->view = new \stdClass();
		}


		protected function content(){
			$currentClass = get_class($this);

			$currentClass = str_replace('App\\Controllers\\', '', $currentClass);

			$currentClass = strtolower(str_replace('Controller', '',$currentClass));

			require_once "../App/Views/".$currentClass."/".$this->view->page.".phtml";
		}

		protected function render($view, $layout = 'mainLayout'){
			$this->view->page = $view;
			
			if(file_exists(require_once "../App/Views/".$layout.".phtml")){
				require_once "../App/Views/".$layout.".phtml";
			}else{
				$this->content();
			}
		}
	}


?>
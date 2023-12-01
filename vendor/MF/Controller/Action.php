<?php  

	namespace MF\Controller;

	use MF\Init\Urls;

	abstract class Action extends Urls{

		private $view;
		protected $data;
		protected $structure;
		protected $broadcrumb;

		public function __construct(){
			$this->view = new \stdClass();
			$this->data = new \stdClass();
			$this->structure = new \stdClass();
			$this->broadcrumb = new \stdClass();
		}

		// Pega os arquivos periféricos *melhorar*
		private function structureView(){

			if(file_exists($this->view->path."scripts.js")){
				$this->structure->internalScripts = "scripts";
			}

			if(file_exists($this->view->path."styles.css")){
				$this->structure->internalStyles = "styles";
			}
		}

		private function getControllerClass($value=''){
			// Consireda qual a classe atual do controller para buscar o diretório com mesmo nome na view
			$currentClass = get_class($this);
			$currentClass = str_replace('App\\Controllers\\', '', $currentClass);
			$currentClass = strtolower(str_replace('Controller', '',$currentClass));
			return $currentClass;
		}

		// Método responsavel por buscar o conteudo da view
		protected function content(){

			// Implementa a página requisita pela aplicação
			require_once $this->view->path."main.phtml";
		}

		// Busca o Layout desejado
		protected function render($view, $layout = 'main'){
			$this->setView($view);
			$this->structureView();
			
			if(file_exists("resources/Layouts/".$layout.".phtml")){
				require_once "resources/Layouts/".$layout.".phtml";
			}else{				
				$this->content();
			}
		}

		private function setView($folder){
			$this->view->folder = $folder;
			$this->view->path = "resources/Views/".$this->getControllerClass()."/".$folder."/";
		}

	}


?>
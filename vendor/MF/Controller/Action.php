<?php  

	namespace MF\Controller;

	abstract class Action{

		protected $view;
		protected $data;

		public function __construct(){
			// Instancia sa variáveis como objeto para facilitar desenvolvimento interno da view
			$this->view = new \stdClass();
			$this->data = new \stdClass();
		}

		// Método responsavel por gerar o conteudo da view
		protected function content(){

			// Consireda qual a classe atual do controller
			$currentClass = get_class($this);

			// Remove os namespaces e pega apenas o controlle atual da aplicação
			$currentClass = str_replace('App\\Controllers\\', '', $currentClass);
			$currentClass = strtolower(str_replace('Controller', '',$currentClass));

			// Implementa a página requisita pela aplicação
			require_once "../Resources/Views/".$currentClass."/".$this->view->page.".phtml";
		}

		// Método responsavel por requistar a estrutura da view (layout e conteudo)
		protected function render($view, $layout = 'mainLayout'){
			$this->view->page = $view;
			
			// Caso não exita o layout é retornado apenas o conteudo da página
			if(file_exists(require_once "../Resources/Views/".$layout.".phtml")){
				require_once "../Resources/Views/".$layout.".phtml";
			}else{
				$this->content();
			}
		}
	}


?>
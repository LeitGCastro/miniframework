<?php  

	namespace MF\Init;

	abstract class Bootstrap extends Urls{

		private $routes;

		public function __construct(){
			$this->initRoutes();
			$this->run($this->getPath());
		}

		// Método que armazena e inicia as rotas na variavel '$routes'
		abstract protected function initRoutes();

		// Método para páginas de erro
		abstract protected function errorPages($url);

		// Método que verifica qual rota foi requirida e aponta para o controller correspondente
		protected function run($url){
			foreach ($this->getRoutes() as $key => $route) {
				if($url === $route['route']) {
					$class = "App\\Controllers\\".ucfirst($route['controller']);
					
					$controller = new $class;
					$action = $route['action'];
					break;
				}
			}

			if(!isset($controller)){
				$errorRoute = $this->errorPages($url);
				
				$class = "App\\Controllers\\".ucfirst($errorRoute['controller']);
				$controller = new $class;
				$action = $errorRoute['action'];
			}

			$controller->$action();
		}

		public function getRoutes(){
			return $this->routes;
		}

		public function setRoutes(array $routes){
			$this->routes = $routes;
		}
	}


?>
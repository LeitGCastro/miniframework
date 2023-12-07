<?php  

	namespace MF\Init;

	abstract class Bootstrap extends Urls{

		private $routes;
		private $errorRoute;

		public function __construct(){
			$this->initRoutes();
			$this->run($this->getPath());
		}

		// Método que armazena e inicia as rotas na variavel '$routes'
		abstract protected function initRoutes();

		// Método para páginas de erro
		// abstract protected function errorPages();

		// Método que verifica qual rota foi requirida e aponta para o controller correspondente
		protected function run($url){
			$class = "App\\Controllers\\".ucfirst($this->errorRoute['controller']);
			$action = $this->errorRoute['action'];

			foreach ($this->getRoutes() as $key => $route) {
				if($url === $route['route']) {
					$class = "App\\Controllers\\".ucfirst($route['controller']);
					$action = $route['action'];					
					break;
				}
			}
			
			$controller = new $class;
			$controller->$action();
		}

		public function getRoutes(){
			return $this->routes;
		}

		public function setRoutes(array $routes){
			$this->routes = $routes;
		}
	
		public function setErrorRoute(array $errorRoute){
			$this->errorRoute = $errorRoute;
		}
	}


?>
<?php 

	namespace App;

	use MF\Init\Bootstrap;

	/**
	 * Classe responsavel por manter o array de rotas do sistema e, 
	 * apartir da classe Bootstrap, carregar o controller correspondente
	*/
	class Route extends Bootstrap {


		protected function initRoutes() {
			
			$routes['home'] = array(
				'route' => '/',
				'controller' => 'indexController',
				'action' => 'index'
			);

			$routes['about'] = array(
				'route' => '/about',
				'controller' => 'indexController',
				'action' => 'about'
			);

			$routes['profile'] = array(
				'route' => '/profile',
				'controller' => 'indexController',
				'action' => 'profile'
			);


			$this->setRoutes($routes);
			$this->setErrorRoute(array(
				'route' => '/404',
				'controller' => 'ErrorController',
				'action' => 'notFound'
			));
		}


		

		// protected function errorPages() {

			

		// 	return $routes;
		// }

	}

?>
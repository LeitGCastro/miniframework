<?php 

	namespace App;

	use MF\Init\Bootstrap;

	/**
	 * Classe responsavel por manter os arrays de rotas do sistema e, 
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

			$routes['notFound'] = array(
				'route' => '/404',
				'controller' => 'indexController',
				'action' => 'notFound'
			);

			$this->setRoutes($routes);
		}

	}

?>
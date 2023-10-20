<?php 

	namespace App;

	use MF\Init\Bootstrap;

	/**
	 * 
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

			$this->setRoutes($routes);
		}

	}

?>
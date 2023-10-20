<?php  

	namespace App\Models;

	/**
	 * 
	*/
	class Usuarios{

		protected $db;
		
		function __construct(\PDO $db){
			$this->db = $db; 
		}
		
		public function getUsers(){
			return ['Maria','José'];
		}
	}


?>
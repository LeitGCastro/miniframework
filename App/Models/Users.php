<?php  

	namespace App\Models;

	/**
	 * 
	*/
	class Users{

		protected $db;
		
		function __construct(PDO $db){
			$this->db = $db; 
		}
	}


?>
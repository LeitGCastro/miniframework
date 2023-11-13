<?php  

	namespace App\Models;

	/**
	 * 
	*/
	class Users{

		public $id_user;
		public $name;
		public $email;
		public $password;
		public $image;
		public $token;

		public function generateToken(){
			return bin2hex(random_bytes(50));
		}

		public function generatePassword($password){
			return password_hash($password, PASSWORD_DEFAULT);
		}
	}

	interface UserDAOInterface {

		public function buildUser($data);
		public function create(User $user, $auth_user = false);
		public function update(User $user, $redirect = true);
		public function changePassword(User $user);

		public function verifyToken($protected = false);
		public function setTokenToSession($token, $redirect = true);
		public function authenticateUser($email, $password);
		public function destroyToken();

		public function findByID($id_user);
		public function findByToken($token);
		public function findByEmail($email);
	}
?>
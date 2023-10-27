<?php  

	namespace App\Models;

	/**
	 * 
	*/
	class Tickets{

		public $id_ticket;
		public $id_cliente;
		public $id_usuario;
		public $id_categoria;
		public $id_status;
		public $id_prioridade;
		public $id_tipo_income;
		public $id_user_transferencia;

		public $dt_atendimento;
		public $dt_vencimento;

		public $protocolo;
		public $assunto;
		public $mensagem;
		
		public $string_emails_extra;
		public $filepath;
		public $filename;

	}

	interface UserDAOInterface {

		public function buildTicket($data);
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
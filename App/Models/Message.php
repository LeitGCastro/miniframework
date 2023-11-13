<?php  

	/**
	 * Class para redirecionamento de usuário e display de mensagens
	 */
	class Message {
		
		public function __construct($url){
			$this->url = $url;
		}
		
		public function setMessage($msg, $type = "error", $redirect = "404", $position = "top-right"){

			if(!empty($msg)){
				$_SESSION["MSG"]["msg"] = $msg;
				$_SESSION["MSG"]["type"] = $type;
				$_SESSION["MSG"]["position"] = $position;
			}

			if($redirect == "back"){
				header("Location: " . $_SERVER["HTTP_REFERER"]);
			}else{
				// echo $redirect;
				header("Location: $this->url" . $redirect);
			}

		}

		public function getMessage($value=''){

			if(!empty($_SESSION['MSG'])){
				return [
					"msg" => $_SESSION["MSG"]['msg'],
					"type" => $_SESSION["MSG"]['type'],
					"position" => $_SESSION["MSG"]['position']
				];
			}else{
				return false;
			}

		}

		public function clearMessage($value=''){
			$_SESSION["MSG"]["msg"] = "";
			$_SESSION["MSG"]["type"] = "";
			$_SESSION["MSG"]["position"] = "";	
		}
	}
?>
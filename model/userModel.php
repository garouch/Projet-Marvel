<?php 

	require_once "model.php";

	class userModel extends model{

		public function registerUser(string $email, string $password, string $username){

			$this->create( array("email", "password", "username"), array($email, $password, $username));

		}






	}



?>
<?php 

	/**
	* 
	*/

	require_once "controller.php";

	class loginController extends Controller
	{
		
		public function login(array $user): ?string // typage donnée en sortie (Null ou string);
		{
			if (!isset($user["email"]) || !isset($user["password"]))
				// return "view/no-connect/login.php"; // pas besoin des {} quand il n'y a qu'une seule instruction
				return "view/no-connect/login.php";
			if (empty(trim($user["email"])) || empty(trim($user["password"])))
				// return "view/no-connect/login.php"; // pas besoin des {} quand il n'y a qu'une seule instruction
				return "view/no-connect/login.php";
			$email = htmlspecialchars(trim($user["email"]));
			$password = strip_tags(trim($user["password"]));

			if (!$this->validateEmail($email))
			{
				return "view/no-connect/login.php";
			}

			if ($email == "toto@toto.toto" && $password = "toto")
			{
				$_SESSION["user"] = $user;
				return "view/connect/index.php";
			}
			else
			{
				return "view/no-connect/login.php";
			}
			
		}

		public function validateEmail(string $email): bool
		{
			return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? true : false;
	
		}
	}



?>
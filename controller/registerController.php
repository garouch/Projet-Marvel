<?php

/**
* 
*/
require_once "controller.php";

class registerController extends Controller
{
	public function register(array $user): ?string // typage donnée en sortie (Null ou string);
		{
			if (!isset($user["email"]) || !isset($user["password"] || !isset($user["username"]))
				// return "view/no-connect/login.php"; // pas besoin des {} quand il n'y a qu'une seule instruction
				return "view/no-connect/register.php";
			if (empty(trim($user["email"])) || empty(trim($user["password"])) || empty(trim($user["username"])))
				// return "view/no-connect/login.php"; // pas besoin des {} quand il n'y a qu'une seule instruction
				return "view/no-connect/register.php";
			$email = htmlspecialchars(trim($user["email"]));
			$password = strip_tags(trim($user["password"]));
			$username = strip_tags(trim($user["username"]));

			if (!$this->validateEmail($email))
			{
				return "view/no-connect/register.php";
			}

			if ($email == "toto@toto.toto" && $password = "toto")
			{
				$_SESSION["user"] = $user;
				return "view/connect/index.php";
			}
			else
			{
				return "view/no-connect/register.php";
			}
			
		}
}



?>
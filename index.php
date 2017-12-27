<?php


require "config.php";

$view = "view/no-connect/login.php";

if ($_GET)
{
	if (isset($_GET["page"]))
	{
		foreach (PAGE_SITE as $key => $val)
		{
			if ($key == $_GET["page"])
			{
				$view = $val;
				break;
			}
		}
	}
}

if ($_POST){
	if (isset($_POST["page"])) {
		switch ($_POST["page"]):
			case 'login':
				require "controller/loginController.php";
				$controllerLogin = new loginController();
				$view = $controllerLogin->login($_POST);
				break;
			case 'register':
				require "controller/loginController.php";
				$controllerLogin = new loginController();
				$view = $controllerLogin->login($_POST);
				break;
			endswitch;
	
		}
	}
	require $view;

?>
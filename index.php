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

if ($_POST)
{
	require "controller/loginController.php";
	$controllerLogin = new loginController();
	$view = $controllerLogin->login($_POST);

}
	require $view;

?>
<?php

class Functions
{
    public function start()
	{
		require_once "controller/PagesController.php";
		if(isset($_GET['page'])){
			$page = $_GET['page'];
			$page = explode("/", $page);
			$page0 = $page[0];

			if($pageController->exists($page0)) {

				if(isset($page[1])){
					$page1 = $page[1];
					$pageController->$page0($page1);	
				}else{
					$pageController->$page0();
				}

			}else{
				$pageController->error();
			}
		}else{
			$pageController->home();
		}
	}
}

$functions = new Functions;
$functions->start();

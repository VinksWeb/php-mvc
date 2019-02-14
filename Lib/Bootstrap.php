<?php  

/**
 * 
 */
class Bootstrap
{
	function __construct()
	{
		ini_set('display_errors', 1);

		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		print_r($url);

		if (empty($url[0])) {
			require './Controllers/dashboardController.php';
			$controller = new dashboardController();
			$controller->index();
			return false;
		}

		$file = './Controllers/'.$url[0].'Controller.php';
		// print_r($file);
		if (file_exists($file)) {
			require $file;
		} else {
			require './Controllers/errorController.php';
			$error = new errorController();
			$error->index();
			return false;
		}

		$name = $url[0].'Controller';

		$controller = new $name;
		$controller->loadModel(ucfirst($url[0]));

		print_r(ucfirst($url[0]).'<br>');
		if (isset($url[2])) {
			if (method_exists($controller,$url[1])) {
				echo 22;
				$controller->{$url[1]}($url[2]); 
				return false;
			} else {
				$this->error();
			}

		}
		else {
			if (isset($url[1])) {
				// if (method_exists($controller,$url[1])) {
				// 	echo 11;
					$controller->{$url[1]}();
					return false;
				// } else {
					// $this->error();
				// }
			} else {
				// $controller->index();
			}
		}
		$controller->index();
		
	}
	
	function error()
	{
		require './Controllers/errorController.php';
		$controller = new errorController();
		$controller->index();
		return false;
	}
}

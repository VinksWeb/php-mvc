<?php 


/**
 * 
 */
class Controller
{
	function __construct()
	{
		echo "Main Controller </br>";
		$this->view = new View();
	}

	public function loadModel($name)
	{
		$path = './Models/'.$name.'Model.php';
		// print_r($path );exit;
		if (file_exists($path)) {
			require './Models/'.$name.'Model.php';

			echo 'load Model';
			$modalName = $name.'Model';
			$this->model = new $modalName();
		}
	}
}
<?php


/**
 * 
 */
class View
{
	
	function __construct()
	{
		// echo 'Main View <br/>';
	}

	public function render($name)
	{
		// echo $name;
		// if ($name == "error") {
		// 	require 'Views/Partials/'. $name .'.php';
		// } else{
			require 'Views/'. $name .'.php';
		// }
	}
}
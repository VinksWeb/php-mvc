<?php

/**
 * 
 */
class LoginModel extends Model
{	
	function __construct()
	{
		parent::__construct();
		echo "Login Model <br>";
	}

	public function run()
	{
		
		// $name = $_POST['loghin'];
		// $password = $_POST['password'];
// print_r($_POST);
		$state = $this->db->prepare("SELECT id FROM users WHERE name = :login AND password = MD5(:password)");

		$state->execute(array(
			':login' => $_POST['login'],
			':password' => $_POST['password']
		));

		// $data = $state->fetchAll();
		$count = $state->rowCount();
		if ($count > 0) {
			Session::init();
			Session::set('loggedIn',true);
			header('location: ../dashboard');
		} else {
			header('location: ../login');
		}
		// print_r($data);exit;
	}
}
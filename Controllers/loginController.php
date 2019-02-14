<?php

// require './Models/LoginModel.php';

class loginController extends Controller
{
	// public $msg = "dashboard";
	
	function __construct()
	{
		parent::__construct();
		echo 'Login Controller <br>';
	}

	function index()
	{
		// $model = new LoginModel;
		// $this->view->msg = "Login";
		$this->view->render('login');
	}

	function run()
	{
		$this->model->run();
	}
}
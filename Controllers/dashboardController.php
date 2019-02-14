<?php

// include './Models/StudentModel.php';

class dashboardController extends Controller
{
	// public $msg = "dashboard";
	
	function __construct()
	{
		parent::__construct();
		Session::init();
		$loggedIn = Session::get('loggedIn');

		if ($loggedIn == false) {
			// header('location: ./dashboard');
			// exit;
		}

		$this->view->js = array();
	}

	function index()
	{
		// echo 'inside dash';
		$this->view->msg = "dashboard";
		$this->view->render('dashboard');
	}

	function logout()
	{
		Session::destroy();
		header('location: ../login');
		exit;
	}
}
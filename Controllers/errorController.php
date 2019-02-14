<?php


/**
 * 
 */
class errorController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		// echo "Not Found!";
	}

	function index()
	{
		$this->view->msg = "not exists.";
		$this->view->render('Partials/error');
	}
}
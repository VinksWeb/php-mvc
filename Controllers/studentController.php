<?php

// require 'Models/StudentModel.php';
/**
 * 
 */
class studentController extends Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->view->msg = "Student";
		$this->view->render('student');
	}

	public function getStudent($acc = false)
	{
		$model = new StudentModel();
		$this->view->getData = $model->getData();
	}
}

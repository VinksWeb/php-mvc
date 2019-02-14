<?php 

// include './Models/StandardModel.php';
/**
 * 
 */
class standardController extends Controller
{	
	protected $msg = 'standard';

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->view->msg = $this->msg; 
		$this->view->render('standard');
	}

	public function getStandard($acc = false)
	{
		echo "getSTudents </br>"; 
		echo "id ".$acc. "<br/>";

		
		$model = new StudentModel();
	}
}


?>
<?php

class StudentModel extends Model
{
	public function __construct()
	{
		echo 'Student Model';
	}

	function getData()
	{
		return 10 + 10;
	}
}
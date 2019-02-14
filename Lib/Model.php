<?php


class Model
{
	function __construct()
	{
		echo 'Main Model <br>';
		$this->db = new Database;
	}
}

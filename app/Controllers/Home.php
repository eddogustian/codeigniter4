<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$this->header('Title web');
		echo view('template/content');
		$this->footer();
	}

	//--------------------------------------------------------------------

}

<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Common {

	public function action_index()
	{
		$this->response->body('admin');
	}

} // End Admin

<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api extends Controller_Common {

	public function action_index()
	{
		$this->response->body('api');
	}

} // End Api

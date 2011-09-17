<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Utility extends Controller_Common {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}

	public function action_info()
	{
		$this->response->body("info id=".$this->id);
	}
	
	public function action_options()
	{
		$this->response->body('options');
	}
	
	public function action_rankings()
	{
		$this->response->body('rankings');
	}
	
} // End Utility

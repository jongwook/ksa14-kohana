<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Memo extends Controller_Common {

	public function action_index()
	{
		$id = $this->id;
		
		$this->response->body('memo id='.$id);
	}
	
	public function action_write()
	{
		$this->response->body('memo write');
	}

} // End Memo

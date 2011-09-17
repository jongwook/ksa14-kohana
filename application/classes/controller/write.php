<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Write extends Controller_Common {

	public function action_index()
	{
		$id = $this->id;
		
		if($id) 
			$this->response->body('modify id='.$id);
		else
			$this->response->body('write new');
			
	}

} // End Write

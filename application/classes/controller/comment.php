<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Comment extends Controller_Common {

	public function action_index()
	{
		$id = $this->id;
		$page = $this->page;

		if(!$id)
			die('invalid access');
		
		if($page)
			$this->response->body('comment id='.$id.' page='.$page);
		else
			$this->response->body('comment id='.$id);
	}

} // End Comment

<?php defined('SYSPATH') or die('No direct script access.');

class Controller_View extends Controller_Common {

	public function action_index($id=NULL)
	{
		$id = $this->id;
		$mobile = $this->mobile;
		
		$this->response->body(($mobile?'mobile':'').'view id = '.$id);
	}

} // End View

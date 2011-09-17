<?php defined('SYSPATH') or die('No direct script access.');

class Controller_List extends Controller_Common {

	public function action_index()
	{
		$page = $this->page;
		$mobile = $this->mobile;
		
		$this->response->body(($mobile?'mobile':'').'list page='.$page);
	}

} // End List

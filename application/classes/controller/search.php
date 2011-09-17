<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Search extends Controller_Common {

	public function action_index()
	{
		$method = $this->method;
		$keyword = $this->keyword;
		
		$this->response->body('search method='.$method.' keyword='.$keyword);
	}

} // End Search

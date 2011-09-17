<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common extends Controller {

	public function before() {
		// setup variables
		$this->id = $this->request->param("id");
		$this->page = $this->request->param("page");
		$this->keyword = $this->request->param("keyword");
		$this->method = $this->request->param("method");
		$this->mobile = $this->request->param("mobile");
	}
	
	public function after() {
		
	}
	
} // End Common

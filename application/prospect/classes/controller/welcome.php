<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('hello, world prospect!');
	}

	public function action_dump() {
		$this->response->body(URL::site('teste'));
	}

} // End Welcome

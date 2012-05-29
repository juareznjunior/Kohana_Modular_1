<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Area_Dump extends Controller {

	public function action_index()
	{
		$this->response->body('area dump');
	}

} // End Welcome

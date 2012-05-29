<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Area_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('area welcome');
	}

} // End Welcome

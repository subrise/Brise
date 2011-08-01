<?php defined('SYSPATH') or die('No direct script access.');

class Controller_SRAdmin_Welcome extends Controller_SRAdmin_Base {
	
	public function action_index()
	{
		$this->template->page_title   = 'Welcome ' . Auth::instance()->get_user()->username;
		$this->template->page_content = View::factory('sradmin/welcome');
	}
	
} // End Controller_SRAdmin_Welcome
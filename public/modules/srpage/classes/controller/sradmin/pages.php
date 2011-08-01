<?php defined('SYSPATH') or die('No direct script access.');

class Controller_SRAdmin_Pages extends Controller_SRAdmin_Base {
	
	public function before()
	{
		parent::before();
		
		$this->template->active_menu = 'pages';
	}
	
	public function action_index()
	{
		$pages = ORM::factory('page')->where('trashed', '=', 0)->find_all();

		$this->template->page_title   = 'Pages';
		$this->template->page_content = View::factory('sradmin/pages')
			->bind('pages', $pages);
	}
	
	public function action_create()
	{
		$page = ORM::factory('page');
		
		$template_options = array();
		
		$template_options['home'] = 'Home';
		
		$this->template->page_title   = 'Create a page';
		$this->template->page_content = View::factory('sradmin/page_create')
			->bind('page', $page);
		

		
	}
	
}
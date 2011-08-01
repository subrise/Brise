<?php defined('SYSPATH') or die('No direct script access.');
/**
* 
*/
class Controller_SRAdmin_Settings extends Controller_SRAdmin_Base
{
	public function before()
	{
		parent::before();

		$pages        = ORM::factory('page')->where('trashed','=', 0)->find_all();
		$page_options = array();
		if ($pages->count() > 0)
		{
			$page_options[] = 'Please select the home page.';
			foreach ($pages as $page)
			{
				$page_options[$page->id] = $page->title;
			}
		}
		else
		{
			$page_options[] = 'No pages available.';
		}
		
		$this->template->active_menu  = 'settings';
		$this->template->page_title   = 'Site settings';
		$this->template->page_content = View::factory('sradmin/settings')
			->bind('page_options', $page_options);
		
	}
	
	public function action_index()
	{
		$post = $this->request->post();
		if ($post)
		{
			unset($post['submit']);
			foreach ($post as $index => $value)
			{
				Settings::instance()->set($index, $value);
			}
			
			$this->request->redirect(Route::url('sradmin',array('controller'=>'settings')));
		}
	}
	
} // End Controller_SRAdmin_Settings

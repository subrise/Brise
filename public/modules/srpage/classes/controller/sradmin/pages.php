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
		// If post variables are sent, try to save the page
		$post = $this->request->post();
		if ( $post )
		{
			try
			{
				$page      = ORM::factory('page');
				$page->uri = $page->generate_uri($post['title']);
				$page->values($post);
				
				$page->save();
				$this->request->redirect(Route::url('sradmin', array('controller'=>'pages')));
			}
			catch (ORM_Validation_Exception $e)
			{
				$errors = $e->errors();
				print_r($errors);
				die();
			}
		}
		$page = ORM::factory('page');
		
		$template_options = array();
		
		$templates = Kohana::$config->load('templates')->as_array();
		foreach ($templates as $index => $template)
		{
			$template_options[$index] = $template['name'];
		}
		
		
		$template_options['home'] = 'Home';
		
		$this->template->page_title   = 'Create a page';
		$this->template->page_content = View::factory('sradmin/page_create')
			->bind(            'page', $page)
			->bind('template_options', $template_options);
		

		
	}
	
}
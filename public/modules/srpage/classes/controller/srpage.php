<?php defined('SYSPATH') or die('No direct script access.');

class Controller_SRPage extends Controller_Template {
	
	public $template = 'srpage/loader';
	
	public function action_index()
	{
		if ($uri = $this->request->param('uri'))
		{
			$page = ORM::factory('page')
				->where('uri', '=', $uri)
				->and_where('online','=', TRUE)
				->and_where('trashed','=', FALSE)
				->find();
		}
		else
		{
			$page = ORM::factory('page')
				->where('id','=',Settings::instance()->get('home_page_id'))
				->and_where('online','=',TRUE)
				->and_where('trashed','=',FALSE)
				->find();
		}
		
		if ($page->loaded())
		{
			$text_array = $page->get_textareas();
			
			$this->template->page_title    = $page->title;
			$this->template->page_template = View::factory('srpage/templates/'.$page->template)
				->bind('textarea', $text_array);
		}
	}
	
	public function after()
	{
		if ( ! isset($this->template->page_title) )
			$this->template->page_title = 'Page not found.';
		
		if ( ! isset($this->template->page_template) )
			$this->template->page_template = View::factory('srpage/templates/page_not_found');
			
		if ( ! isset($this->template->contenteditable) )
			$this->template->contenteditable = '';
		
		View::bind_global('page_title', $this->template->page_title);
		View::bind_global('page_template', $this->template->page_template);
		View::bind_global('contenteditable', $this->template->contenteditable);
	
		parent::after();
	}
	
} // End Controller_SRPage
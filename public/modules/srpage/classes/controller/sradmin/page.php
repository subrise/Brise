<?php defined('SYSPATH') or die('No direct script access.');

class Controller_SRAdmin_Page extends Controller_SRAdmin_Base {
	
	public $template = 'srpage/loader';
	
	public function before()
	{
		parent::before();
		
		$this->template->active_menu = 'pages';
	}
	
	public function action_index()
	{
		$this->request->redirect(Route::url('sradmin', array('controller'=>'pages')));
	}
	
	public function action_edit()
	{
		$page = ORM::factory('page', $this->request->param('id'));
		
		if ( ! $page->loaded())
			$this->request->redirect(Route::url('sradmin', array('controller'=>'pages')));

		$text_array = $page->get_textareas();
			
		$this->template->page_title   = 'Editing: '.$page->title;
		$this->template->page_template = View::factory('srpage/templates/'.$page->template)
			->set('contenteditable', ' contenteditable="TRUE"')
			->bind('textarea', $text_array);
	}
	
}
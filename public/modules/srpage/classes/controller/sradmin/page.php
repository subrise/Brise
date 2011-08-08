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

		$text_array = $page->get_textwidgets();
			
		$this->template->page_title   = 'Editing: '.$page->title;
		$this->template->page_template = View::factory('srpage/templates/'.$page->template)
			->bind('textwidget', $text_array);
			
		$this->template->scripts = array();
		$this->template->scripts[] = View::factory('sradmin/fragments/page_js')
			->bind('page', $page);
	}
	
	public function action_save()
	{
		$this->auto_render = FALSE;
		$post = $this->request->post();
		
		if ($post)
		{
			$page_id = $this->request->param('id');
			$index   = $post['index'];
			$value   = $post['value'];
			
			// check if index already exist
			$textwidget = ORM::factory('textwidget')
				->where('page_id', '=', $page_id)
				->and_where('index', '=', $index)
				->find();
			
			
			$textwidget->page_id = $page_id;
			$textwidget->index   = $index;
			$textwidget->value   = $value;
			$textwidget->save();
			
			echo json_encode('success');
			
		}
	}
	
}
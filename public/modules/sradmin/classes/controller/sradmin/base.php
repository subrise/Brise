<?php defined('SYSPATH') or die('No direct script access.');


/**
 * Base template controller for all SR Admin controllers
 *
 * @package Brise
 * @author Sammy Hubner
 * @copyright Subrise Games (c) 2011. All rights reserved.
 * @category Controller
 */
class Controller_SRAdmin_Base extends Controller_Template {
	
	public $template = 'sradmin/loader';
	
	public function before()
	{
		parent::before();
		
		// For admin users only
		if ( ! Auth::instance()->logged_in('admin') && $this->request->action() !== 'login')
			$this->request->redirect(Route::url('sradmin', array('controller'=>'auth','action'=>'login')));
	}
	
	public function after()
	{
		if ( ! isset($this->template->page_title) )
			$this->template->page_title = 'Brise';
			
		if ( ! isset($this->template->page_content) )
			$this->template->page_content = View::factory('sradmin/oops');
		
		
		View::bind_global('page_title', $this->template->page_title);
		View::bind_global('page_content', $this->template->page_content);
		parent::after();
	}
	
} // End Controller_SRAdmin_Base
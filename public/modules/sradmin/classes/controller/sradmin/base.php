<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Base template controller for all SR Admin controllers.
 *
 * It checks if an admin user has logged in. Otherwise it will send the user to the auth/login page.
 *
 * @package   Brise
 * @category  Controller
 * @author    Sammy Hubner
 * @copyright (c) 2011 Subrise Games
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
			$this->template->page_title = 'Brise | Content management system';
			
		if ( ! isset($this->template->page_content) )
			$this->template->page_content = View::factory('sradmin/oops');
		
		if ( ! isset($this->template->active_menu) )
			$this->template->active_menu = 'brise';
		
		View::bind_global('page_title',   $this->template->page_title);
		View::bind_global('page_content', $this->template->page_content);
		View::bind_global('active_menu',  $this->template->active_menu);
		
		parent::after();		
	}
	
} // End Controller_SRAdmin_Base
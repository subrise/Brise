<?php defined('SYSPATH') or die('No direct script access.');

class Controller_SRAdmin_Auth extends Controller_SRAdmin_Base {
	
	public function action_login()
	{
		$this->template->page_content = View::factory('sradmin/login');
		
		$post = $this->request->post();
		
		if (isset($post['username'], $post['password']))
		{
			// check for valid login
			// TODO: I think the login function escapes the values by itself
			$username = $post['username'];
			$password = $post['password'];
			
			if (Auth::instance()->login($username, $password))
			{
				// user logged in succesfully
				$this->request->redirect(Route::url('sradmin'));
			}
			else
			{
				Msg::instance()->set( Msg::ERROR, 'Username and password combination did not match.');
				// failed login
				$this->template->set('page_title', 'Login failed');
			}
		}
		else
		{
			// show clean login form
			$this->template->page_title = 'Login';
		}
	}
	
	public function action_logout()
	{
		Auth::instance()->logout();
		$this->request->redirect(Route::url('sradmin'));
	}
	
} // End Controller_SRAdmin_Auth
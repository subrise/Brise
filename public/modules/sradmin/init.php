<?php defined('SYSPATH') or die('No direct script access.');

// Catch-all route for Codebench classes to run
Route::set('sradmin', 'sr-admin(/<controller>)(/<action>)')
	->defaults(
		array(
			'directory'  => 'sradmin',
			'controller' => 'welcome',
			'action'     => 'index'
		)
	);

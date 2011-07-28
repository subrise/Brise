<?php defined('SYSPATH') or die('No direct script access.');

// Catch-all route for Codebench classes to run
Route::set('sradmin', 'sr-admin(/<action>)')
	->defaults(
		array(
			'controller' => 'sradmin',
			'action'     => 'index'
		)
	);

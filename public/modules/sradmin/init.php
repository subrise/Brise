<?php defined('SYSPATH') or die('No direct script access.');

Route::set('sradmin', 'sr-admin(/<controller>)(/<action>)(/<id>)')
	->defaults(
		array(
			'directory'  => 'sradmin',
			'controller' => 'welcome',
			'action'     => 'index'
		)
	);

<?php defined('SYSPATH') or die('No direct script access.');

Route::set('test', 'test(/<action>)(/<any>)')
	->defaults(
		array(
			'controller' => 'test',
			'action'     => 'index'
		)
	);

Route::set('srpage', '(<uri>)(/<any>)')
	->defaults(
		array(
			'controller' => 'srpage',
			'action'     => 'index'
		)
	);
	
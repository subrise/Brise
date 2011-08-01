<?php defined('SYSPATH') or die('No direct script access.');

Route::set('srpage', '(<uri>)(/<any>)')
	->defaults(
		array(
			'controller' => 'srpage',
			'action'     => 'index'
		)
	);


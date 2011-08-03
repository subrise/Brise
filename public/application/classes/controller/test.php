<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {

	public function action_index()
	{
		echo '<h2>Test</h2>';
		
		$uri = ORM::factory('page')->generate_uri('Sammy Hübner');
		echo $uri.'.';
		
	}

} // End Controller_Test

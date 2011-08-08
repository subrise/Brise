<?php defined('SYSPATH') or die('No direct script access.');

class Model_TextWidget extends ORM {
	
	protected $_belongs_to = array(
		'page' => array()
	);
	
} // End Model_TextWidget
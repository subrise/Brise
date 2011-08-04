<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends Model_Auth_User {

	protected $_has_many = array(
		
		'created_pages' => array(
			'model'       => 'page',
			'foreign_key' => 'author_id'
		),
		
		'modified_pages' => array(
			'model'       => 'page',
			'foreign_key' => 'modifier_id'
		)
		
	);

} // End Model_User
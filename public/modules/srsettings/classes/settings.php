<?php defined('SYSPATH') or die('No direct script access.');

class Settings {

	protected static $_instance = NULL;

	public $_values = array();
	
	/**
	 * @return Settings
	 */
	public static function instance()
	{
		if (Settings::$_instance === NULL)
			Settings::$_instance = new Settings();
			
		return Settings::$_instance;
	}
	
	public function __construct()
	{
		// get the settings from database
		$this->_values = array();
		$settings = ORM::factory('setting')->find_all();
		foreach ($settings as $setting)
		{
			$this->_values[$setting->index] = $setting->value;
		}
	}
	
	public function get($index)
	{
		if (isset($this->_values[$index]))
			return $this->_values[$index];
		else
			return FALSE;
	}
	
	public function set($index, $value)
	{
		if ( ! empty($index) )
		{
			$setting = ORM::factory('setting')->where('index','=',$index)->find();
			$setting->index = $index;
			$setting->value  = $value;
			$setting->save();
			$this->_values[$index] = $value;
		}
	}
	
} // End Settings

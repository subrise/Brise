<?php defined('SYSPATH') or die('No direct script access.');

class Model_Page extends ORM {
	
	protected $_belongs_to = array(
		
		'author' => array(
			'model' => 'user'
		),
		
		'modifier' => array(
			'model' => 'user'
		)
		
	);
	
	public function generate_uri($title=NULL, $id=NULL)
	{
		if (empty($title))
		{
			return false;
		}
		else
		{
			$uri = $this->_generate_uri($title, $id);
			$counter = 1;
			while (empty($uri))
			{
				$counter++;
				$uri = $this->_generate_uri($title.$counter, $id);
			}
			return $uri;
		}
	}
	
	private function _generate_uri($title=NULL, $id=NULL)
	{
		if ( ! empty($title) )
		{
			$uri = URL::title($title,'-',TRUE);
			$page = ORM::factory('page')->where('uri','=', $uri)->find();
			
			if ($page->loaded())
			{
				if ($page->id == $id)
					return $uri;
				else
					return false;
			}
			else
				return $uri;
		}
		else
		{
			return false;
		}
	}
	
	public function create(Validation $validation = NULL)
	{
		$this->author_id     = Auth::instance()->get_user()->id;
		$this->modifier_id   = $this->author_id;
		$this->date_created  = time();
		$this->date_modified = time();
		
		parent::create($validation);
	}
	
	public function update(Validation $validation = NULL)
	{
		$this->modifier_id   = Auth::instance()->get_user()->id;
		$this->date_modified = time();
	}
	
} // End Model_Page
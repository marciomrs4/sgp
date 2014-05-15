<?php

namespace system\entity;

class Portaria
{
	protected $name;
	
	public function setName($name)
	{
		if(is_array($name)){
			$this->name = array_values($name);
		}else{
		
			$this->name = $name;
		}
		
		return $this;
	}
	
	public function getName()
	{
		return $this->name;
	}
}
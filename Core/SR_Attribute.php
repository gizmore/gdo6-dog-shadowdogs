<?php
namespace GDO\DogShadowdogs\Core;

class SR_Attribute extends SR_Variable
{

	public function getShortName() { return strtolower(substr($this->name), 0, 2); }

}

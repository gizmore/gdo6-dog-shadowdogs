<?php
namespace GDO\DogShadowdogs\Core;

class SR_Skill extends SR_Variable
{

	public function getShortName() { return strtolower(substr($this->name), 0, 3); }

}

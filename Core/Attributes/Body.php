<?php
namespace GDO\DogShadowdogs\Core\Attributes;

use GDO\DogShadowdogs\Core\SR_Attribute;
use GDO\DogShadowdogs\Core\SR_Player;

final class Body extends SR_Attribute
{

	public function adjustPlayer(SR_Player $player)
	{
		$player->adjust('MaxHP', $this->getVar());
	}

}

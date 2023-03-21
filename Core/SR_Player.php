<?php
namespace GDO\DogShadowdogs\Core;

use GDO\Core\GDO;
use GDO\Core\GDT_AutoInc;
use GDO\Core\GDT_String;
use GDO\Dog\GDT_DogUser;
use GDO\DogShadowdogs\Core\Attributes\Quickness;
use GDO\DogShadowdogs\Core\Attributes\Strength;
use GDO\DogShadowdogs\Core\Attributes\Wisdom;
use GDO\DogShadowdogs\Core\Skills\Melee;

class SR_Player extends GDO
{

	public function gdoColumns(): array
	{
		return [
			GDT_AutoInc::make('player_id'),
			GDT_DogUser::make('player_user'),
			GDT_String::make('player_npc_class'),
			Strength::make('player_strength'),
			Quickness::make('player_quickness'),
			Wisdom::make('player_wisdom'),
			Melee::make('player_melee'),
		];
	}

}

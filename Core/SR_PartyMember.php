<?php
namespace GDO\DogShadowdogs\Core;

use GDO\Core\GDO;
use GDO\Core\GDT_Object;
use GDO\DogShadowdogs\GDT_Player;

final class SR_PartyMember extends GDO
{

	public function gdoColumns(): array
	{
		return [
			GDT_Player::make('player')->primary()->notNull(),
			GDT_Object::make('party')->table(SR_Party::table())->primary()->notNull(),
		];
	}

}

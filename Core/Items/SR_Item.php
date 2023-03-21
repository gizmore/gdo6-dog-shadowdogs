<?php
namespace GDO\DogShadowdogs\Core\Items;

use GDO\Core\GDO;
use GDO\Core\GDT_AutoInc;
use GDO\Core\GDT_String;
use GDO\DogShadowdogs\GDT_Player;

class SR_Item extends GDO
{

	public function gdoColumns(): array
	{
		return [
			GDT_AutoInc::make('item_id'),
			GDT_Player::make('item_player'),
			GDT_String::make('item_name')->ascii()->notNull()->max(64),

		];
	}


}

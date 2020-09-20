<?php
namespace GDO\DogShadowdogs\Core;

use GDO\Core\GDO;
use GDO\Dog\GDT_DogUser;
use GDO\DB\GDT_String;
use GDO\DB\GDT_AutoInc;
use GDO\DogShadowdogs\Core\Attributes\Strength;
use GDO\DogShadowdogs\Core\Skills\Melee;
use GDO\DogShadowdogs\Core\Attributes\Quickness;
use GDO\DogShadowdogs\Core\Attributes\Wisdom;

class SR_Player extends GDO
{
    public function gdoColumns()
    {
        return array(
            GDT_AutoInc::make('player_id'),
            GDT_DogUser::make('player_user'),
            GDT_String::make('player_npc_class'),
            Strength::make(),
            Quickness::make(),
            Wisdom::make(),
            Melee::make(),
        );
    }

}

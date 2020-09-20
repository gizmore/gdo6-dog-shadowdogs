<?php
namespace GDO\DogShadowdogs\Core;

use GDO\Core\GDO;
use GDO\DogShadowdogs\GDT_Player;
use GDO\DB\GDT_Object;

final class SR_PartyMember extends GDO
{
    public function gdoColumns()
    {
        return array(
            GDT_Player::make('player')->primary()->notNull(),
            GDT_Object::make('party')->table(SR_Party::table())->primary()->notNull(),
        );
    }
    
}

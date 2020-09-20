<?php
namespace GDO\DogShadowdogs\Core\Items;

use GDO\Core\GDO;
use GDO\DB\GDT_AutoInc;
use GDO\DB\GDT_String;
use GDO\DogShadowdogs\GDT_Player;

class SR_Item extends GDO
{
    public function gdoColumns()
    {
        return array(
            GDT_AutoInc::make('item_id'),
            GDT_Player::make('item_player'),
            GDT_String::make('item_name')->ascii()->notNull()->max(64),
            
        );
    }

    
    
}

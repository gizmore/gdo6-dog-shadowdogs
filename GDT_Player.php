<?php
namespace GDO\DogShadowdogs;

use GDO\DB\GDT_Object;
use GDO\DogShadowdogs\Core\SR_Player;

final class GDT_Player extends GDT_Object
{
    public function __construct()
    {
        $this->table(SR_Player::table());
    }
    
}

<?php
namespace GDO\DogShadowdogs;

use GDO\Core\GDT_Object;
use GDO\DogShadowdogs\Core\SR_Player;

final class GDT_Player extends GDT_Object
{
    protected function __construct()
    {
        $this->table(SR_Player::table());
    }
    
}

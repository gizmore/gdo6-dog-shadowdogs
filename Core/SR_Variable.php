<?php
namespace GDO\DogShadowdogs\Core;

use GDO\DB\GDT_Int;

abstract class SR_Variable extends GDT_Int
{
    public $bytes = 2;
    
    public static function nextName() { return self::gdoShortNameS(); }
    
    public function adjustPlayer(SR_Player $player) {}
}

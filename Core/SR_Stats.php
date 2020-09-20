<?php
namespace GDO\DogShadowdogs\Core;

use GDO\DB\GDT_Decimal;

abstract class SR_Stats extends GDT_Decimal
{
    public $digitsBefore = 5;
    public $digitsAfter = 1;
    
    public static function nextName() { return self::gdoShortNameS(); }
//     public function adjustPlayer(SR_Player $player) {}
}

<?php
namespace GDO\DogShadowdogs\Core;

use GDO\Core\GDT_Decimal;

abstract class SR_Stats extends GDT_Decimal
{
    public int $digitsBefore = 5;
    public int $digitsAfter = 1;
    
    public static function nextName() { return self::gdoShortNameS(); }
//     public function adjustPlayer(SR_Player $player) {}
}

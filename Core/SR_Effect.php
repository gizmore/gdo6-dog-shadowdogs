<?php
namespace GDO\DogShadowdogs\Core;

use GDO\Core\GDT_Decimal;

abstract class SR_Effect extends GDT_Decimal
{
    public $digitsBefore = 5;
    public $digitsAfter = 1;
    
    public static function nextName() { return self::gdoShortNameS(); }
   
    public function adjustPlayer(SR_Player $player) {}
}

<?php
namespace GDO\DogShadowdogs;

use GDO\Dog\DOG_Command;

abstract class Shadowcommand extends DOG_Command
{
    public $group = 'sd';
    
    public function isLeaderCommand() { return false; }
    
}

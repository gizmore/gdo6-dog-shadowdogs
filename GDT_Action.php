<?php
namespace GDO\DogShadowdogs;

use GDO\DB\GDT_Enum;

final class GDT_Action extends GDT_Enum
{
    protected function __construct()
    {
        $this->enumValues('Created', 'Inside', 'Outside', 'Going', 'Explore', 'Travel', 'Fighting');
    }
    
}

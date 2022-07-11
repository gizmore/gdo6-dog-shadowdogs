<?php
namespace GDO\DogShadowdogs\Core;

use GDO\Core\GDO;
use GDO\Core\GDT_AutoInc;

final class SR_Party extends GDO
{
    public function gdoColumns() : array
    {
        return array(
            GDT_AutoInc::make('party_id'),
            
            
        );
    }
    
}

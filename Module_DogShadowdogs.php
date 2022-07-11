<?php
namespace GDO\DogShadowdogs;

use GDO\Core\GDO_Module;
use GDO\DogShadowdogs\Core\SR_Player;

final class Module_DogShadowdogs extends GDO_Module
{
    public function getDependencies() : array { return ['DogAuth']; }
    
    public function onLoadLanguage() : void { $this->loadLanguage('lang/shadowdogs'); }
    
    public function getClasses() : array
    {
        return array(
            SR_Player::class,
        );
    }
}

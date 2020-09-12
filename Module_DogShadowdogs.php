<?php
namespace GDO\DogIRC;

use GDO\Core\GDO_Module;

final class Module_DogShadowdogs extends GDO_Module
{
    public function getDependencies() { return ['DogAuth']; }
    
    public function onLoadLanguage() { return $this->loadLanguage('lang/shadowdogs'); }
    
}

<?php
namespace GDO\DogShadowdogs;

use GDO\Core\GDT_Enum;

final class GDT_Action extends GDT_Enum
{

	protected function __construct()
	{
		$this->enumValues('Created', 'Inside', 'Outside', 'Going', 'Explore', 'Travel', 'Fighting');
	}

}

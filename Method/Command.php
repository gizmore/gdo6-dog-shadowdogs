<?php
namespace GDO\DogShadowdogs\Method;

use GDO\Core\GDT;
use GDO\Core\GDT_Response;
use GDO\Core\Method;

final class Command extends Method
{

	public function execute(): GDT
	{
		return GDT_Response::make();
	}

}

<?php
namespace GDO\DogShadowdogs\Core;

final class Loader
{

	public static $CORE_PATH;

	public static function init()
	{
		self::$CORE_PATH = GDO_PATH . 'GDO/DogShadowdogs/Core/';

		foreach (Shadowdogs::$ATTRIBUTES as $attribute)
		{
//             require ;
		}
	}

}

<?php
namespace GDO\DogShadowdogs\Core;

final class Shadowdogs
{

	public static $ATTRIBUTES = ['Body', 'Magic', 'Strength', 'Quickness', 'Intelligence', 'Charisma', 'Wisdom', 'Luck', 'Reputation', 'Essence'];

	public static function init()
	{
		Loader::init();
	}

}

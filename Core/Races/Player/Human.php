<?php
namespace GDO\DogShadowdogs\Core\Races\Player;

use GDO\DogShadowdogs\Core\SR_PlayerRace;

final class Human extends SR_PlayerRace
{

	public function startAttributes()
	{
		return [
			'Body' => 10,
			'Charisma' => 10,
			'Essence' => 10,
			'Intelligence' => 10,
			'Luck' => 10,
			'Magic' => 10,
			'Quickness' => 10,
			'Reputation' => 10,
			'Strength' => 10,
			'Wisdom' => 10,
		];
	}

	public function maxAttributes()
	{
		return [
			'Body' => 100,
			'Charisma' => 100,
			'Essence' => 100,
			'Intelligence' => 100,
			'Luck' => 100,
			'Magic' => 100,
			'Quickness' => 100,
			'Reputation' => 100,
			'Strength' => 100,
			'Wisdom' => 100,
		];
	}

}

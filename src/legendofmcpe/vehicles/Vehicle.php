<?php

namespace legendofmcpe\vehicles;

use pocketmine\Player;

class Vehicle{
	/** @var VehicleType $type*/
	protected $type;
	/** @var Player $driver*/
	protected $driver;
	/** @var Player[] $passengers*/
	protected $passengers = [];
	/**
	 * @param VehicleType $type
	 * @param string[] $args
	 * @param Player $driver
	 * @param Player[] $passengers
	 * @throws \InvalidArgumentException throws an exception when an invalid command is passed
	 */
	public function __construct(VehicleType $type, array $args, Player $driver, array $passengers = []){
		$this->type = $type;
		$this->driver = $driver;
		$this->passengers = $passengers;
		$this->shape = $this->type->getShape($args);
	}
}

<?php

namespace legendofmcpe\vehicles;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Vehicles extends PluginBase implements Listener{
	/** @var VehicleType[] */
	private $types = [];
	public function onEnable(){
		$this->registerAll([]);
	}
	/**
	 * @param VehicleType[] $types
	 */
	public function registerAll(array $types){
		foreach($types as $type){
			$this->register($type);
		}
	}
	/**
	 * @param VehicleType $type
	 */
	public function register(VehicleType $type){
		$this->types[] = $type;
	}
}

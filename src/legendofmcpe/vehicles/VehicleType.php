<?php

namespace legendofmcpe\vehicles;

abstract class VehicleType{
	public abstract function getName();
	/**
	 * @param string[] $args
	 * @return VehicleShape
	 */
	public abstract function getShape(array $args);
}

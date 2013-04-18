<?php
class Tauth extends Laravel\Auth\Drivers\Driver {
	public function attempt($arguments = array())
	{
		return $this->login(1); //not using bd. any attemp in post TRUE, just to see working! but never reach dashboard
	}
	public function retrieve($id)
	{
		//Message: abstract method and must therefore be declared abstract
		//what have to put here?
	}
}
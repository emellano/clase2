<?php

class Empleado extends Persona
{
	public $legajo;
	public $sueldoBruto;
	public $sueldoNeto;
	
	function __construct($legajo,$sueldoBruto,$nombreyapellido,$edad)
	{
		parent::__construct($nombreyapellido,$edad);
		$this->legajo=$legajo;
		$this->sueldoBruto=$sueldoBruto;
	}
}
?>
<?php
abstract class Persona
{
	protected $nombreyapellido;
	protected $edad;
	protected $idioma;
	
	function __construct($nombreyapellido,$edad)
	{
		$this->nombreyapellido=$nombreyapellido;
		$this->edad=$edad;
	}

	abstract protected function hablar($idioma);

	abstract protected public function ToString();
?>
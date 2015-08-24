<?php
/**
* 
*/
class Persona
{
	public $nombreyapellido;
	public $edad;
	
	function __construct($nombreyapellido,$edad)
	{
		$this->nombreyapellido=$nombreyapellido;
		$this->edad=$edad;
	}

	public function ToString(){
		echo "Nombre: ".$this->nombreyapellido." <br>";
		echo "Edad: ".$this->edad;
	}
}
?>
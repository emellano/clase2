<html>
<head>
	<title>Prueba Objetos</title>
</head>
<body>
<?php
include "clasePersona.php";
$persona1=new Persona("Enzo Mellano", 30);
$persona2=new Persona("juan perez",72);

$persona1->ToString();
echo "<br>";
$persona2->ToString();
?>
</body>
</html>
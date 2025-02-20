<?php
/*
Si la compra del cliente es inferior a 20 soles podrán requerir 2 cosas:
• Si los productos son de mascotas se mostrará un mensaje: "No se puede realizar el envío".
• Si los productos son de ropa se le mostrará el siguiente mensaje: "Los gastos de envío son 5 soles".
*/

print "<h1>ejercicio 1</h1>";
print "<p>en el presente ejercicio se desarrollara la siguiente casuistica:</p>";

print "<br>";
print "<pre>
Si la compra del cliente es inferior a 20 soles podrán requerir 2 cosas:
Si los productos son de mascotas se mostrará un mensaje: No se puede realizar el envío
Si los productos son de ropa se le mostrará el siguiente mensaje: Los gastos de envío son 5 soles.
 </pre>";

$compra=21;
$cosa="ropa"; //mascotas//ropa

print "el objeto comprado es:".$cosa;
print "<br>";
print "su precio es de: S/".$compra."soles <br>";


print "segun los datos, el mensaje es el siguiente: <br>";
if ($compra<20) {
	// code...

	if ($cosa=="mascotas") {
		print "<h1>no se puede realizar envios </h1>";
	}
	if($cosa=="ropa")
	{
		print "<h1>Los gastos de envio son  5 soles</h1>"; 
	}
}
else
{
	print "<h1>no hay mensajes para mostrar</h1>";
}
?>
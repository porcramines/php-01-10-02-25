<?php
$dni1="001";
$nombre1="lucas";
$apellido1="grau";

$dni2="002";
$nombre2="Pablo";
$apellido2="Vizcarra";
?>

<table border="1px">
	<tr>
		<td>DNI</td>
		<td>APELLLIDO</td>
		<td>NOMBRE</td>
	</tr>
		<td><?php print $dni1; ?></td>
		<td><?php print $apellido1; ?></td>
		<td><?php print $nombre1; ?></td>
	</tr>
	</tr>
		<td><?php print $dni2; ?></td>
		<td><?php print $apellido2; ?></td>
		<td><?php print $nombre2; ?></td>
	</tr>

</table>

<?php
print "imprimir en transpuesta <br>";
for ($i=0; $i <1 ; $i++) { 
print "<table border='1px'>	";

print "<tr>";
print "<td>DNI</td>";
print "<td>".$dni1."</td>";
print "</tr>";

print "<tr>";
print "<td>APELLIDO</td>";
print "<td>".$apellido1."</td>";
print "</tr>";

print "<tr>";
print "<td>NOMBRE</td>";
print "<td>".$nombre1."</td>";
print "</tr>";



print "<tr>";
print "<td>DNI</td>";
print "<td>".$dni2."</td>";
print "</tr>";

print "<tr>";
print "<td>APELLIDO</td>";
print "<td>".$apellido2."</td>";
print "</tr>";

print "<tr>";
print "<td>NOMBRE</td>";
print "<td>".$nombre2."</td>";
print "</tr>";



print "</table>";


}
?>
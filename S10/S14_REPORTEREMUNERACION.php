<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style>
	table, tr, th, td{
	border: 2px solid #000000;
	text-align: center;
    }
</style>

<!--*******************************************************/-->
<!--//USANDO php-->
<!--/*******************************************************/-->
<?php
print "<br>";

print "REPORTE DE REMUNERACION";
print "<br>";
?>

<table border-collapse: separate; >
<tr >
        <th bgcolor='#0A0A2A', style='color:#F7FE2E'>Apellido</th>
        <th bgcolor='#0A0A2A', style='color:#F7FE2E'>Nombre</th>
        <th bgcolor='#0A0A2A', style='color:#F7FE2E'>Remuneracion Base</th>
        <th bgcolor='#0A0A2A', style='color:#F7FE2E'>Descuento</th>
        <th bgcolor='#0A0A2A', style='color:#F7FE2E'>Remuneracion</th>
</tr>

 <?php
$apellido=array("Burgos","Villegas","Fernandez","Ramirez","Carmona","De santis");
$nombre=array("Jeronimo","Estefania","Guillermo","Eliana","Jose","Marcela");
$remuneracionbruta=array(3200000,3200000,4500000,3200000,3200000,1500000
);
 $descuento=0.15;
$nroderegistros=count($nombre);


for ($i=0; $i<$nroderegistros; $i++) 
{ 
$remuneracion=$remuneracionbruta[$i]*$descuento;
 print "<tr>";
        print "<th> $apellido[$i]</th>";
        print "<th> $nombre[$i]</th>";
        print "<th> $remuneracionbruta[$i]</th>";
        print "<th> $descuento</th>";
        print "<th>$remuneracion</th>";
 Print "</tr>";
}

?>
 
</table>
</body>
</html>
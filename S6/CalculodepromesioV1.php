<?php
$nombre="lucas";
$apellido="grau";
$curso="ACCESS";
$controllectura=17;
$laboratorios=18;
$examenpractico=17;
$promedio=($controllectura+$laboratorios+$examenpractico)/3;
print "<h1>REPORTE DE NOTAS </h1>";
print "<br>";
print "Estimado estudiante sr. ".$nombre.", ".$apellido." según los reporte de notas que fueron procesados "." control de lectura ".$controllectura." laboratorios ".$laboratorios." examenpractico ".$examenpractico.", correspondiente al curso de".$curso." su promedio es : ". $promedio."; se emite dicho reporte para las acciones necesarias.|";

?>

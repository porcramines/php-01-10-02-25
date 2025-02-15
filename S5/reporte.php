<?php

/*recepcion de variables enviados por el formulario*/
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$rb=$_GET['rb'];
$essalud=$_GET['essalud'];
/*calculo de la remuneracion neta*/
$rn=$rb-($rb*$essalud);
/*visualizar los datos en el php*/
print "Estimado Sr. ".$nombre.", ".$apellido." segun los calculos, tu remuneracion Neta es: S/. ".$rn. " Gracias por su preferencia";

?>
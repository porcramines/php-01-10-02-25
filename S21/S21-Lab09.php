<?php

/*condicion1=comprobar que son valor validos para una contraseña*/
function comprobar_nombre_usuario($contrasena_usuario){

$permitidos = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789-_.;:,$%&?=^{}+-/[]";
for ($i=0; $i<strlen($contrasena_usuario); $i++)
{
	if (strpos($permitidos, substr($contrasena_usuario,$i,1))===false)
	{

	  return false;
	}
}
	return true;
}

/*condicion2=comprobar que son >8 caracteres*/

function comprobar_tamano_usuario($contrasena_usuario)
{
	if (strlen($contrasena_usuario)<8){
	    
		return false;
	}
	else
	{
		return true;
	}

}
/*condicion3=comprobar que hay una mayuscula*/
function comprobar_mayuscula_usuario($contrasena_usuario){
$existe=true;
$permitidos = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
	for ($i=0; $i<strlen($contrasena_usuario); $i++)
	{
		if (strpos($permitidos, substr($contrasena_usuario,$i,1))===false)
		{
		 
	  	$existe=false;
	  	
		}
		else
		{
			if (ctype_upper(substr($contrasena_usuario,$i,1))) {
				$existe=true;
				return $existe;
			}
			
		
		}

	}
return $existe;
}


/*condicion4=comprobar que hay un numero */

function comprobar_numero_usuario($contrasena_usuario){
$existe=true;
$permitidos = "0123456789";
for ($i=0; $i<strlen($contrasena_usuario); $i++)
{
	if (strpos($permitidos, substr($contrasena_usuario,$i,1))===false)
	{
	 
	  $existe=false;
	  
	}
	else
	{
		$existe=true;
		return $existe;
	}
}
return $existe;
}

/*condicion5=comprobar que tiene un signo de puntuacion*/
function comprobar_signopunto_usuario($contrasena_usuario){
$existe=true;
$permitidos = ".:,;";
for ($i=0; $i<strlen($contrasena_usuario); $i++)
{
	if (strpos($permitidos, substr($contrasena_usuario,$i,1))===false)
	{
	 
	  $existe=false;
	 
	}
	else
	{
		$existe=true;
		return $existe;
	}
}
return $existe;
}


$contrasena=$_POST['contrasena'];//coloque la contraseña aqui
$condicion1=comprobar_nombre_usuario($contrasena);
$condicion2=comprobar_tamano_usuario($contrasena);
$condicion3=comprobar_mayuscula_usuario($contrasena);
$condicion4=comprobar_numero_usuario($contrasena);
$condicion5=comprobar_signopunto_usuario($contrasena);

print "Cumple la condicion 1 - caracteres numericos, letras, caracteres especiales:".$condicion1."<br>";
print "cumple la condicion 2 - tamaño mayor a 8:".$condicion2."<br>";
print "cumple la condicion 3-almenos una mayuscula:".$condicion3."<br>";
print "cumple la condicion condicion 4 - almenos un numero:".$condicion4."<br>";
print "cumple la condicion condicion 5 almenos un signo puntuacion:".$condicion5."<br>";

if (($condicion1 and $condicion2 and $condicion3 and $condicion4 and $condicion5)==true){
	print $contrasena.": es valida";
}else{
	print $contrasena.": es invalida";
}


?>
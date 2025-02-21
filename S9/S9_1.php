<?php
$provincia=$_POST['provincia'] ;// con el metodo post tacna,tarata,candarave,jorge basadre
switch ($provincia) {
  case 'Tacna':
    print "la produccion primaria de tacna es: "."ACEITUNAS";
    break;
case 'Tarata':
    print "la produccion primaria de tarata es: "."OREGANO";
    break;
case 'Candarave':
    print "la produccion primaria de Candarave es: "."FLORES";
    break;
case 'Jorge_Basadre':
    print "la produccion primaria de Jorge Basadre es: "."TUNAS";
    break;

  default:
    print "no se reconoce la provincia";
    break;
}

?>
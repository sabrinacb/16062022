<?php

$telefono = $_POST['telefono'];
$paisVariable = $_POST['pais'];
/*esto tiene que ser el name del menú en el html*/
$estadoCivil  = $_POST['estado'];
$nacimiento = $_POST['nacimiento'];
echo 'Hola tu pais es '.$paisVariable. ' y tu estado civil es '.$estadoCivil. 'y tu teléfono es '. $telefono. 'Y naciste el día y el año: '. $nacimiento;


?>
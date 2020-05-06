<?php

//declaracion de variables

$a="hola mmundo";
$b= 3;
$c= 2.5;

//echo $a," ",$b," ",$c;

// areglos 

$array_1 = array();
$alumno = array();

$array_1[]= 1;
$array_1[]= 2;
$array_1[]= 3;

//var_dump($array_1);

$alumno["claveunica"]= "241584";
$alumno["nombre"]= "josue";
$alumno["apellido"]= "sanchez";

//json

$json='{"claveunica":"241584","nombre":"josue","apellido":"sanchez"}';  
$alumno_aux = json_decode($json);

echo $alumno_aux->claveunica;

?>
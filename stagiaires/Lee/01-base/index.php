<?php

require_once "FirstClass.php";


$instance1 = new FirstClass();  // () not obliged but good practice
$instance2 = new FirstClass();

$instance3 = $instance1;
var_dump(
    $instance1, // first object of type FirstClass
    $instance2, // second object (aka instance de classe)
    $instance3  // this is only a link to $instance1, it is not an object in itself
);


$tab1 = [1,2,3];
$tab2 = $tab1;

var_dump($tab1, $tab2);

$tab1 = [3,2,1];
$tab2[]="coucou";
var_dump($tab1, $tab2);
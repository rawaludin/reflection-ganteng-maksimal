<?php
include_once "Penulis.php";
include_once "Buku.php";
$aam = new Penulis("Aam Amiruddin", "Bandung");
$buku = new Buku("Membingkai Surga dalam Rumah Tangga", $aam);
// echo $buku;
$reflector = new ReflectionClass($buku);
// echo $reflector->getName() . "\n";

// echo $reflector->getParentClass()->getName() . "\n";

// var_dump($reflector->getInterfaceNames());

// var_dump($reflector->getMethods());

// var_dump($reflector->getConstructor());

// $constructor = $reflector->getConstructor();
// var_dump($constructor->getParameters());

// $constructor = $reflector->getConstructor();
// $parameters = $constructor->getParameters();
// var_dump($parameters[1]->getClass());

$constructor = $reflector->getConstructor();
$parameters = $constructor->getParameters();
var_dump($parameters[0]->getDefaultValue());

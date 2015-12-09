<?php

include "/var/www/html/nusoap/lib/nusoap.php";
include "Numeros.php";

$soap = new nusoap_server;
$soap->configureWSDL('numeros');

$soap->register(
    'Numeros.add',
    array('a' => 'xsd:int', 'b' => 'xsd:int'),
    array('return' => 'xsd:int'),
    'add'
);

$soap->register(
    'Numeros.divide',
    array('a' => 'xsd:int', 'b' => 'xsd:int'),
    array('return' => 'xsd:int'),
    'divide'
);

//var_dump($HTTP_RAW_POST_DATA); die();

$HTTP_RAW_POST_DATA =(isset($HTTP_RAW_POST_DATA)) ? $HTTP_RAW_POST_DATA : '';

$soap->service($HTTP_RAW_POST_DATA);




?>

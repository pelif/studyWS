<?php

require "../nusoap/lib/nusoap.php";
require 'Hp12c.php';

$server = new nusoap_server();

$server->configureWSDL('calculaMontante');

$server->register('Hp12c.calculaMontante',
    array(
        'p' => 'xsd:decimal',
        'i' => 'xsd:decimal',
        'n' => 'xsd:integer',
        'a' => 'xsd:integer'
        ),
    array(
        'return' => 'xsd:decimal'
        ),
    'calculaMontante'
    );

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
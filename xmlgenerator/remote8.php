<?php

require '../nusoap/lib/nusoap.php';
require 'Moeda.php';

$server = new nusoap_server();

$server->configureWSDL('moeda');

$server->register('Moeda.converterMoeda',
    array(
        'valor' => 'xsd:decimal',
        'de'   => 'xsd:string',
        'para'   => 'xsd:string'
    ),
    array(
        'return' => 'xsd:decimal'
    ),
    'converterMoeda'
    );

$server->register('Moeda.descricaoMoeda',
    array(
        'codigoMoeda' => 'xsd:string'
    ),
    array(
        'return' => 'xsd:string'
    ),
    'descricaoMoeda'
);

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
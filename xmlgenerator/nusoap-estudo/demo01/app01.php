<?php

ini_set('error_reporting', 1);
//error_reporting(E_ALL);

require '/var/www/html/nusoap/lib/nusoap.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'Numeros.php';

$client = new nusoap_client('http://localhost/xmlgenerator/nusoap-estudo/demo01/wsdl-with-nusoap.php?wsdl', true);

$result = $client->call("add", array(3, 4));

$err = $client->getError();

if($err)
{
    print_r($err);
}


?>

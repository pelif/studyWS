<?php

require '/var/www/html/nusoap/lib/nusoap.php';

$server = new soap_server;
$server->register('hello');

function hello($name)
{
    return 'Hello' . $name;
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';

$soap->service($HTTP_RAW_POST_DATA);

 ?>

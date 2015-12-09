<?php

require '/var/www/html/nusoap/lib/nusoap.php';

$client = new soapclient('http://localhost/xmlgenerator/nusoap-estudo/server.php');

$result = $client->call('hello', array('name' => 'Frederich Van Voith'));

print_r($result);


 ?>

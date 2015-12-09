<?php

require 'startzend.php';
require 'Hp12c.php';

if (isset($_GET['wsdl']))
{
  $server = new Zend_Soap_AutoDiscover();
}
else
{
  $server = new Zend_Soap_Server('http://localhost/xmlgenerator/remote9.php?wsdl');
}

$server->setClass('Hp12c');

var_dump($server); 

echo $server->handle();

<?php 

error_reporting(E_ALL); 

require "loadZend.php"; 

$soap = new Zend_Soap_Client("http://localhost/xmlgenerator/ws-zend02/server.php?wsdl");

echo $soap->Sum(3,4) . PHP_EOL; 

echo $soap->Sub(3,5) . PHP_EOL; 


?>
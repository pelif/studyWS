<?php

require 'startzend.php';
require 'Moeda.php';

$server = new Zend_XmlRpc_Server();

$server->setClass('Moeda'); 

echo $server->handle();
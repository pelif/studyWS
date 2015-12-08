<?php

require 'startzend.php';
require 'Hp12c.php';

$server = new Zend_XmlRpc_Server();

$server->setClass('Hp12c','calculadora');

echo $server->handle();
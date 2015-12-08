<?php

require 'WebServiceServer.php';

$server = new WebServiceServer();

$server->setClass('Moeda');

echo $server->handle();
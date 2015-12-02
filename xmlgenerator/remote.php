<?php

require 'WebServiceServer.php';

$server = new WebServiceServer();

$server->setClass('Hp12c');

echo $server->handle();
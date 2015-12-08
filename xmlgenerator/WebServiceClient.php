<?php
require 'WebServiceClientProxy.php';

class WebServiceClient
{
  private $server = null;

  public function __construct($server)
  {
    $this->server = $server;
  }

  public function getProxy()
  {
    $proxy = new WebServiceClientProxy($this->server);
    return $proxy;
  }
}
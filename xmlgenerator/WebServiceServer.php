<?php

class WebServiceServer
{
  private $instance = null;
  private $dom = null;

  public function __construct()
  {
    $this->dom = new DOMDocument(null, 'UTF-8');

    if (isset($_POST['service']))
      $this->dom->loadXML($_POST['service']);
  }

  public function setClass($class)
  {
    require $class . '.php';
    $this->instance = new $class();
  }

  public function handle()
  {
    $response = false;
   
    try {
      $xpath = new DOMXPath($this->dom);

      $query = "//method";

      $results = $xpath->query($query);

      if ($results->length == 0) throw new Exception('No method specified');

      $method = $results->item(0)->getAttribute('name');

      $query = "//method/argument";

      $results = $xpath->query($query);

      if ($results->length == 0) throw new Exception('No argument specified');

      $arguments = array();
      foreach ($results as $result)
      {
        $value = $result->nodeValue;
        (is_numeric($value)) ?   ($value = 1 * $value) : null;
        $arguments[] = $value;
      }

      $response = call_user_func_array(array($this->instance, $method), $arguments);
    } catch (Exception $e) {
      $response = $e->getMessage();
    }


    if ($response === false) $response = 'Invalid request';

    $xml = "<return>";
    $xml.= "<value>" . $response . "</value>";
    $xml.= "<type>" . gettype($response) . "</type>";
    $xml.= "</return>"; 

    header('Content-type: text/xml; charset=UTF-8');

    return $xml;
  }
}
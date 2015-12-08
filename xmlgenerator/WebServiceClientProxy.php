<?php

class WebServiceClientProxy
{
  private $server = null;

  public function __construct($server)
  {
    $this->server = $server;
  }
  
  
  public function __call($method, $arguments)
  {
      $dom = new DOMDocument('1.0', 'UTF-8');
      $element = $dom->createElement('method');
      $element->setAttribute('name', $method);
  
      foreach($arguments as $argument)
      {
          $child = $dom->createElement('argument');
          $textNode = $dom->createTextNode($argument);
          $child->appendChild($textNode);
          $element->appendChild($child);
      }
  
      $dom->appendChild($element);
  
      $data = 'service=' . $dom->saveXML();
       
  
      $params = array(
          'http' => array(
              'method' => 'POST',
              'content' => $data
          )
      );
  
      $ctx = stream_context_create($params);
      $fp = @fopen($this->server, 'rb', false, $ctx);
  
      if (!$fp)
      {
          throw new Exception('Problem with URL');
      }
  
      $response = @stream_get_contents($fp);
  
      if ($response === false) {
          throw new Exception("Problem reading data from {$this->server}");
      }
  
      $dom = new DOMDocument(null, 'UTF-8');
      $dom->loadXML($response);
        
  
      $result = $dom->childNodes->item(0)->childNodes->item(0)->nodeValue;
      $type = $dom->childNodes->item(0)->childNodes->item(1)->nodeValue;
  
      settype($result, $type);
            
  
      return $result;
  } 
  
  
  
}
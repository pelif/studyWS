<?php

error_reporting(E_ALL);

/*
require_once "/var/www/html/zend/zend/ZendFramework-1.12.17-minimal/library/Zend/Soap/Server.php";
require_once "/var/www/html/zend/zend/ZendFramework-1.12.17-minimal/library/Zend/Soap/AutoDiscover.php";
*/

require_once "loadZend.php";


class MyClass
{
    /**
     * @param integer $num1
     * @param integer $num2
     * @return integer
     */
    public function Sum($num1, $num2)
    {
        return ($num1 + $num2);
    }

    /**
     * @param integer $num1
     * @param integer $num2
     * @return integer
     */
    public function Sub($num1, $num2)
    {
        return ($num2 - $num1);
    }

}



if(isset($_GET['wsdl']))
{
  $server = new Zend_Soap_AutoDiscover();
  $server->setClass("MyClass");    
  $server->handle();
}
else
{
  $server = new Zend_Soap_Server("http://127.0.0.1/xmlgenerator/ws-zend02/server.php?wsdl");
  $server->setClass("MyClass");
  $server->handle();
}

?>

<?php

ini_set('error_reporting', 1);

$origem = "http://cep.republicavirtual.com.br/web_cep.php?cep=04195120&formato=xml";

$dom = new DOMDocument();
$dom->load($origem);

$element = $dom->getElementsByTagName("webservicecep")->item(0);

foreach($element as $elem)
{
    if($elem->getElementsByTagName('resultado')->item(0)->nodeValue != 1)
    {
        throw new Exception("Resultado não encontrado para este cep");
    }

    $uf = $elem->getElementsByTagName('uf')->item(0)->nodeValue;
    $cidade = $elem->getElementsByTagName('cidade')->item(0)->nodeValue;
    $bairro = $elem->getElementsByTagName('bairro')->item(0)->nodeValue;
    $tipo_logradouro = $elem->getElementsByTagName('tipo_logradouro')->item(0)->nodeValue;
    $logradouro = $elem->getElementsByTagName('logradouro')->item(0)->nodeValue;
}

echo $uf . "->" . $cidade . "->" . $bairro . "->" . $tipo_logradouro . "->" . $logradouro;



/*
$cep = simplexml_import_dom($dom);

header('Content-type: text/xml; charset=UTF-8');

$result = $cep->xpath('/webservicecep/resultado');


foreach($result as $res)
{
    echo $res . PHP_EOL;
}
*/
?>

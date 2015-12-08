<?php

$value = $_POST['value'];
$value = (float) str_replace(',', '.', $value);
$from = $_POST['from'];
$to = $_POST['to'];

require 'WebServiceClient.php';

$client = new WebServiceClient('http://localhost/xmlgenerator/remote2.php');

$proxy = $client->getProxy();

$value2 = $proxy->converterMoeda($value, $from, $to);

//formatacao
$value2 = str_replace('.', ',', $value2);

$currency1 = $proxy->descricaoMoeda($from);
$currency2 = $proxy->descricaoMoeda($to);

$mensagem = "$value $currency1 equivalem a $value2 $currency2";

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Moeda convertida</title>
</head>
<body>
<?=$mensagem?><br>
<a href="form-xml02.php">Retornar</a>
</body>
</html>
<?php

$value = $_POST['value'];
$value = (float) str_replace(',', '.', $value);
$from = $_POST['from'];
$to = $_POST['to'];

require '../nusoap/lib/nusoap.php';

$client = new nusoap_client('http://localhost/xmlgenerator/remote8.php?wsdl');

$value2 = $client->call('Moeda.converterMoeda', array($value, $from, $to));

//formatação
$value2 = str_replace('.', ',', $value2);

$currency1 = $client->call('Moeda.descricaoMoeda', array($from));
$currency2 = $client->call('Moeda.descricaoMoeda', array($to));

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
<a href="#" onclick="history.back(-1);">Retornar</a>
</body>
</html>
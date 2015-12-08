<?php

$value = $_POST['value'];
$value = (float) str_replace(',', '.', $value);
$from = $_POST['from'];
$to = $_POST['to'];

require 'startzend.php';

$client = new Zend_XmlRpc_Client('http://localhost/xmlgenerator/remote4.php');

$value2 = $client->call('converterMoeda', array($value, $from, $to));

/*
$proxy = $client->getProxy();
$value2 = $proxy->converterMoeda($value, $from, $to);
*/

//formatação
$value2 = str_replace('.', ',', $value2);

$currency1 = $client->call('descricaoMoeda', array($from));
$currency2 = $client->call('descricaoMoeda', array($to));

$mensagem = "$value $currency1 equivalem a $value2 $currency2";

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Moeda convertida</title>
</head>
<body>
<?php echo $mensagem; ?><br>
<a href="form-conversao-moeda.php">Retornar</a>
</body>
</html>
<?php

$p = (float) $_POST['p'];
$i = $_POST['i'];
$n = (int) $_POST['n'];
$t = $_POST['t'];
$a = (int) $_POST['a'];

$i = (float) str_replace(',', '.', $i);

require 'startzend.php';

$client = new Zend_XmlRpc_Client('http://localhost/xmlgenerator/remote3.php');

$proxy = $client->getProxy('calculadora');

$m = $proxy->calculaMontante($p, $i, $n, $a);

$l = $m - $p;

//formatação
$l = str_replace('.', ',', $l);
$p = str_replace('.', ',', $p);
$i = str_replace('.', ',', ($i * 100));
$m = str_replace('.', ',', $m);

$mensagem = "Um capital de R$ $p, aplicado a uma taxa de juros de $i%, durante $n $t renderá R$ $l";

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?=$mensagem?><br>
<a href="xml22.php">Retornar</a>
</body>
</html>
<?php

$origem = __DIR__ . DIRECTORY_SEPARATOR . 'livros_comDTD.xml';

define('EOL', "<br>\n");
define('TAB', " \t");

$livros = new SimpleXMLElement($origem, null, true);

header('Content-type: text/html; charset=UTF-8');

// Procura o primeiro elemento filho

/*
$resultados = $livros->livro[0]->xpath('titulo');
foreach ($resultados as $titulo)
{
  echo $titulo . EOL;
}
*/

foreach($livros->livro as $livro) 
{
   echo '<B>' . $livro[0]->xpath('titulo')[0] . '</B>' . EOL;
   echo TAB . "ISBN: " . $livro[0]->xpath('isbn')[0] . EOL;
   echo TAB . "AUTOR: " . $livro[0]->xpath('autor')[0] . EOL;
   echo TAB . "EDITORA: " . $livro[0]->xpath('editora')[0] . EOL . EOL . "<HR>";
   
  // echo "<pre>";print_r($livro[0]->xpath('titulo')[0]) . EOL;
  
}



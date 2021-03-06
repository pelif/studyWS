<?php

// defini��o dos dados
$isbns = array(
    '8578271122',
    '857827069x',
    '8532511015',
    '8598078395'
);

$dados = array(
    array(
        'titulo'  =>'O Hobbit',
        'autor'    =>'J. R. R. Tolkien',
        'editora'  =>'Devir'
    ),
    array(
        'titulo'  =>'As Cronicas de Narnia',
        'autor'    =>'C. S. Lewis',
        'editora'  =>'Martins Fontes'
    ),
    array(
        'titulo'  =>'Harry Potter e a Pedra Filosofal',
        'autor'    =>'J. K. Rowling',
        'editora'  =>'Rocco'
    ),
    array(
        'titulo'  =>'O Ladrao de Raios',
        'autor'  =>'Rick Riordan',
        'editora'  =>'Intrinseca'
    )
);

// cria��o do documento

define('EOL', "\n");

$xml.=  '<livros>' . PHP_EOL;
foreach($isbns as $index => $isbn)
{
    $xml.=  '<livro isbn="' . $isbn . '">' . PHP_EOL;
    $xml.=  '<titulo>' . $dados[$index]['titulo'] . '</titulo>' . PHP_EOL;
    $xml.=  '<autor>' . $dados[$index]['autor'] . '</autor>' . EOL;
    $xml.=  '<editora>' . $dados[$index]['editora'] . '</editora>' . EOL;
    $xml.=  '</livro>' . EOL;
}
$xml.=  '</livros>';

header('Content-type: text/xml');
echo $xml;

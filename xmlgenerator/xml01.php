<?php
// definição dos dados
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
        'titulo'  =>'As Crônicas de Nárnia',
        'autor'    =>'C. S. Lewis',
        'editora'  =>'Martins Fontes'
    ),
    array(
        'titulo'  =>'Harry Potter e a Pedra Filosofal',
        'autor'    =>'J. K. Rowling',
        'editora'  =>'Rocco'
    ),
    array(
        'titulo'  =>'O Ladrão de Raios',
        'autor'  =>'Rick Riordan',
        'editora'  =>'Intrinseca'
    )
    );

// criação do documento

define('EOL', "\n");

echo '<livros>' . EOL;
foreach($isbns as $index => $isbn)
{
  echo '<livro isbn="' . $isbn . '">' . EOL;
  echo '<titulo>' . $dados[$index]['titulo'] . '</titulo>' . EOL;
  echo '<autor>' . $dados[$index]['autor'] . '</autor>' . EOL;
  echo '<editora>' . $dados[$index]['editora'] . '</editora>' . EOL;
  echo '</livro>' . EOL;
}
echo '</livros>';
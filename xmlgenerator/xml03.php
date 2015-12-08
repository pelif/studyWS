<?php

$destino = __DIR__ . DIRECTORY_SEPARATOR . 'livros.xml';

if (!file_exists($destino))
{
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
          'titulo'  =>'OPPPSSSS',
          'autor'    =>'Rick Riordan',
          'editora'  =>'Intrinseca'
      )
  );

  // criação do documento

  define('EOL', "\n");

  $xml .= '<livros>' . EOL;
  foreach($isbns as $index => $isbn)
  {
    $xml .= '<livro isbn="' . $isbn . '">' . EOL;
    $xml .= '<titulo>' . $dados[$index]['titulo'] . '</titulo>' . EOL;
    $xml .= '<autor>' . $dados[$index]['autor'] . '</autor>' . EOL;
    $xml .= '<editora>' . $dados[$index]['editora'] . '</editora>' . EOL;
    $xml .= '</livro>' . EOL;
  }
  $xml .= '</livros>';

  $handle = fopen($destino, 'a');
  fwrite($handle, '');
  fclose($handle);

  file_put_contents($destino, $xml);
}

header('Location: livros.xml');

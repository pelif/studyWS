<?php

$html = <<<DOCBLOCK
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Livros</title>
</head>
<body>
DOCBLOCK;

echo $html;

$origem = __DIR__ . DIRECTORY_SEPARATOR . 'livros_comDTD.xml';

define('EOL', "\n");

$livros = new SimpleXMLElement($origem, null, true);

echo '<table>' . EOL;
echo '<thead>' . EOL;
echo '<tr>' . EOL;
echo '<th>ISBN</th>' . EOL;
echo '<th>Titulo</th>' . EOL;
echo '<th>Autor</th>' . EOL;
echo '<th>Editora</th>' . EOL;
echo '</tr>' . EOL;
echo '</thead>' . EOL;

foreach ($livros->livro as $livro)
{
  echo '<tr>' . EOL;

  echo "<td>{$livro['isbn']}</td>" . EOL;
  echo "<td>{$livro->titulo}</td>" . EOL;
  echo "<td>{$livro->autor}</td>" . EOL;
  echo "<td>{$livro->editora}</td>" . EOL;

  echo '</tr>' . EOL;
}

$html = <<<DOCBLOCK
</table>
</body>
</html>
DOCBLOCK;

echo $html;
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Exemplo de comunica&ccedil;&atilde;o com XML</title>
</head>
<body>
  <h6>Cálculo de Juros Compostos</h6>
  <form action="local-NuSoap.php" method="post">
    <table>
      <tr>
        <td>Capital inicial:</td>
        <td><input type="text" id="p" name="p"></td>
      </tr>
      <tr>
        <td>Taxa de juros:</td>
        <td><input type="text" id="i" name="i"></td>
      </tr>
      <tr>
        <td>Tempo:</td>
        <td><input type="text" id="n" name="n">
        <select id="t" name="t">
            <option value="dias">dias</option>
            <option value="meses">meses</option>
            <option value="anos">anos</option>
        </select></td>
      </tr>
      <tr>
        <td>Precis&atilde;o do resultado:</td>
        <td><input type="text" id="a" name="a" value="2"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" id="calcular" value="calcular">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>

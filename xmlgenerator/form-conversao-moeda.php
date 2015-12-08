<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Exemplo de comunica&ccedil;&atilde;o com XML</title>
</head>
<body>
  <h4>Convers&atilde;o de Moedas</h4>
  <form action="local4.php" method="post">
    <table>
      <tr>
        <td>
        Valor:
        </td>
        <td>
        <input type="text" id="value" name="value">
        </td>
      </tr>
      <tr>
        <td>
        De:
        </td>
        <td>
        <select id="from" name="from">
            <option value="USD">d&oacute;lares norte-americanos</option>
            <option value="EUR">euros</option>
            <option value="JPY">ienes</option>
        </select></td>
      </tr>
      <tr>
        <td>
        Para:
        </td>
        <td>
        <select id="to" name="to">
            <option value="USD">d&oacute;lares norte-americanos</option>
            <option value="EUR">euros</option>
            <option value="JPY">ienes</option>
        </select></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" id="converter" value="converter">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
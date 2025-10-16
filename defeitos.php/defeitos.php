<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Defeitos</title>
</head>
<body>
<label for="codigo">Qual o codigo da peça?:</label>
    <select id="Placa" name="Placa" size="4">
  <option value="210515">210515</option>
  <option value="200917">200917</option>
  <option value="214517">214517</option>
  <option value="213300">213300</option> </br>
    <form action="dados.php" method="post">
    <label for="defeitos">Qual o defeito?:</label>
  <select id="Defeitos" name="Defeitos" size="4">
  <option value="resistência">resistência</option>
  <option value="trilha">trilha</option>
  <option value="placa">placa</option>
  <option value="curto">curto</option>
 <input type="submit" value="Submit">
</select>
</form>
</body>
</html>

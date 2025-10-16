<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Defeitos</title>
</head>
<body>
    <h2>Cadastro de Defeitos</h2>

    <form action="codigo.php" method="post">
        <label for="Placa">Qual o código da peça?</label><br>
        <select id="Placa" name="Placa" size="4">
            <option value="210515">210515</option>
            <option value="200917">200917</option>
            <option value="214517">214517</option>
            <option value="213300">213300</option>
        </select>

        <br><br>
        <form action="defeito.php" method="post">
        <label for="Defeitos">Qual o defeito?</label><br>
        <select id="Defeitos" name="Defeitos" size="4">
            <option value="resistência">Resistência</option>
            <option value="trilha">Trilha</option>
            <option value="placa">Placa</option>
            <option value="curto">Curto</option>
        </select>

        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

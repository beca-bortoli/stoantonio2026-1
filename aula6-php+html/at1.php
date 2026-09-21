<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma</title>
</head>
<body>

<h1>Somar dois números</h1>

<form method="POST">
    <label>Primeiro número:</label>
    <input type="number" name="numero1" required>

    <br><br>

    <label>Segundo número:</label>
    <input type="number" name="numero2" required>

    <br><br>

    <button type="submit">Somar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    $soma = $numero1 + $numero2;

    echo "<h2>Resultado: $soma</h2>";
}
?>

</body>
</html>

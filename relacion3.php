<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>
<body>

<h2>Ejercicio 1: Multiplicación de dos números</h2>
<form method="post">
    <label for="num1">Número 1:</label>
    <input type="number" name="num1" required>
    <label for="num2">Número 2:</label>
    <input type="number" name="num2" required>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num1"]) && isset($_POST["num2"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $resultado = $num1 * $num2;
    echo "<p>El resultado de la multiplicación es: $resultado</p>";
}
?>

<h2>Ejercicio 2: Conversor de euros a dólares</h2>
<form method="post">
    <label for="euros">Cantidad en euros:</label>
    <input type="number" name="euros" required>
    <input type="submit" value="Convertir">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["euros"])) {
    $euros = $_POST["euros"];
    $tasa_cambio = 1.18; 
    $dolares = $euros * $tasa_cambio;
    echo "<p>La cantidad en dólares es: $dolares</p>";
}
?>

<h2>Ejercicio 3: Conversor de dólares a euros</h2>
<form method="post">
    <label for="dolares">Cantidad en dólares:</label>
    <input type="number" name="dolares" required>
    <input type="submit" value="Convertir">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["dolares"])) {
    $dolares = $_POST["dolares"];
    $tasa_cambio = 0.85;
    $euros = $dolares * $tasa_cambio;
    echo "<p>La cantidad en euros es: $euros</p>";
}
?>

<h2>Ejercicio 4: Operaciones aritméticas</h2>
<form method="post">
    <label for="num3">Número 1:</label>
    <input type="number" name="num3" required>
    <label for="num4">Número 2:</label>
    <input type="number" name="num4" required>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num3"]) && isset($_POST["num4"])) {
    $num3 = $_POST["num3"];
    $num4 = $_POST["num4"];
    
    $suma = $num3 + $num4;
    $resta = $num3 - $num4;
    $multiplicacion = $num3 * $num4;

    $division = ($num4 != 0) ? $num3 / $num4 : "Error: División por cero";

    echo "<p>Suma: $suma</p>";
    echo "<p>Resta: $resta</p>";
    echo "<p>Multiplicación: $multiplicacion</p>";
    echo "<p>División: $division</p>";
}
?>

</body>
</html>
<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <title>Hello, World!</title>
</head>
<body>

<div class="calculator">

<h2>Tugas PHP Ke-2 Gazlan Hazieq El Akbar, 21 Januari 2025</h2>

<form method="POST">

<input type="number" name="number1" placeholder="Masukkan angka pertama" required>

<input type="number" name="number2" placeholder="Masukkan angka kedua" required>

<input type="submit" value="Hitung">

</form>

<div class="result">

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$number1 = $_POST['number1'];

$number2 = $_POST['number2'];

$result = $number1 * $number2;

echo "Hasil Perkalian:$result";

}

?>

</div>

</div>

</body>
</html>

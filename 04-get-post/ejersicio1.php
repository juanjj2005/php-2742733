<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>VERIFIQUE SU EDAD</h1>

<form action="ejersicio1.php" method="GET">
    <label for="edad">Ingresa tu edad</label>
    <input type="number" id="edad" name="edad" required>
    <button type="submit">verificar</button>
</form>


</body>

</html>

<?php

$edad = $_GET["edad"];

if ($edad >= 18){
    echo 'USTED ES TODO UN SEÑOR';
}

else if ($edad < 18){
    echo 'AH QUE PESAR USTED ES MERO SARDINO';
}




?>
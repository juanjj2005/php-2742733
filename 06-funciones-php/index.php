<?php
echo "ejecutando php";

function ValidarEdad($edad){
    if ($edad >= 18){
        echo ' mayor de edad';
    } else if($edad < 18){
        echo ' menor de edad';
    }
}

ValidarEdad(isset($_POST['edad']) ? $_POST['edad'] :12);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: black; color:white;">

<h1>funciones PHP 😍</h1>





</body>
</html>
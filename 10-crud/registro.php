<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./registo.css">
</head>

<body>
    <div class="contenedor_grande">
        <div class="contenedor">
            <div>
                <h1 class="titulo">Registrate</h1>
            </div>

            <div>
                <form action="index.php" method="post">
                    <div class="user"><label for="user">E-mail</label></div>
                    <input class="linea" id="user" type="text" name="user">
            </div>
            <br>
            <div class="pass"><label for="password">contraseña</label>
                <input class="linea" id="password" type="password" name="password">
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="pass"><label for="password">confirmar contraseña</label>
                <input class="linea" id="password" type="password" name="password">
            </div>
            <br>
            <br>
            <br>
            <div class="boton1">
                <button class="boton" type="submit">Iniciar sesión</button>
            </div>
            </form>
            <br>
        </div>

</body>

</html>
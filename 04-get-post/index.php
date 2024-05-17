<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{ background-color: <?php echo $_GET['color']?>;}
    </style>
</head>
<body>

    <form action="index.php" method="get">
        <label for="username">username</label>
        <input id="username" type="text" placeholder="username..." name="username">
        <br>
        <label for="useremail" required>Useremail</label>
        <input id="useremail" type="email" placeholder="useremail..." required
        name="useremail">
        <br>
        <label for="color">Color</label>
        <input id="color" type="text" name="color" placeholder="Color para el fondo...">
        <button type="submit">Enviar</button>
    </form>
    


</body>
</html>
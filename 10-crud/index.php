<?php require('conexion.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


        <div class="container text-center">
            <div class="row align-items-center">
                <?php
                $statement = $conexion->prepare("SELECT * FROM cursos");
                $result = $statement->fetchAll();


                foreach ($result as $item) { ?>

                    <div class="col">
                        <a class="no-link" href="producto.php?id=<?php echo $item['id'] ?>">
                            <div class="card" style="width: 18rem;">
                                <img src="<?php echo $item['imagen'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"> <?php echo $item['titulo'] ?> </h5>
                                    <p class="card-text"> <?php echo $item['descripcion'] ?> </p>
                                    <div><i class="bi bi-people-fill"></i><span><?php echo $item['estudiantes'] ?></span></div>
                                </div>
                        </a>

            
                    </div>
        </div>

        <?php }  ?>

        <button class="boton center" link="curso.php" type="button" ><a href="./curso.php">Ingresar</a></button>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<?php require('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    echo "datos enviados";
    $titulocurso = $_POST['tituilocurso'];
    $imagencurso = $_POST['imagencurso'];
    $descripcion = $_POST['descripcioncurso'];
    $estudiantes = $_POST['estidiantes'];




    $statement = $conexion->prepare("INSERT INTO `cursos`(`imagen`, `curso`, `descripción`,
    `estudiantes`) VALUES   (?,?,?,?)");
    $statement->execute(array ($imagencurso,$titulocurso,$descripcioncurso,$estudiantes) );

    $_SESSION['mensaje'] = 'Tarea agregada exitosamente';
    $_SESSION['color '] = 'sucess';
}

?>

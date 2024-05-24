<?php
//SQL
//01-SELECT Nombre,Edad FROM profesores;
// esta funcion sirve para mostrar la edad y los nombres de los profesores

//02-SELECT DISTINCT Materia FROM profesores;
// esta funcion sirve  para hacer que aparesca el valor que elegimos

//03-SELECT * FROM profesores WHERE Edad='25'
//esta funcion hace que aparesca  el valor especifico que le pedimos

//04-SELECT * FROM profesores ORDER BY edad;
// sirve para ordenar de menor a mayor 

//05-SELECT * FROM `profesores` WHERE `edad` = '25' AND `Nombre` LIKE 'A%';
// muestra  el valor de la edad y letra escogida

//06-SELECT * FROM profesores WHERE Edad = '65' OR nombre = 'osvlado';
// la funcion que cumple es poner un valor u otro y este dara el resultado

//07-SELECT * FROM profesores WHERE NOT Edad = '30';
// este cumple la funcion  de no mostrar el valor que le asignamos

//08-INSERT INTO `profesores`(`ID`, `Nombre`, `Edad`, `Estado civil`, `Materia`, `Documento`) VALUES ('7','camilo','20','soltero','ingles','127454');
//  este tiene la funcion de  agregar una fila a la tabla

//09-SELECT Nombre FROM estudiantes WHERE Nombre IS NOT NULL;
//  este cumple con la funcion de anular todo menos el valor que se ingresa 

//10-UPDATE `estudiantes` SET `Media Tecnica` = 'sistema' WHERE `ID`= 4;
//  sirve para actualizar los datos 


//11-DELETE FROM `estudiantes` WHERE `Grado`= '10';
//  tiene la funcion de eliminar los datos secelcionados



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
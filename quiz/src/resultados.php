<?php
include('../includes/header.php');
include('../database.php');


$datos = array(
    /* variables de sesion de las consultas */
    $nombre = $_SESSION['jugador'],

    $pregunta1 = $_SESSION['pregunta1'],
    $respuesta1 = $_SESSION['respuesta1'],
    $respuestaverdadera1 = $_SESSION['respuestaverdadera1'],
    $pregunta2 = $_SESSION['pregunta2'],
    $respuesta2 = $_SESSION['respuesta2'],
    $respuestaverdadera2 = $_SESSION['respuestaverdadera2'],
    $pregunta3 = $_SESSION['pregunta3'],
    $respuesta3 = $_SESSION['respuesta3'],
    $respuestaverdadera3 = $_SESSION['respuestaverdadera3'],
    $pregunta4 = $_SESSION['pregunta4'],
    $respuesta4 = $_SESSION['respuesta4'],
    $respuestaverdadera4 = $_SESSION['respuestaverdadera4'],
    $pregunta5 = $_SESSION['pregunta5'],
    $respuesta5 = $_SESSION['respuesta5'],
    $respuestaverdadera5 = $_SESSION['respuestaverdadera5']
);



$query = ("INSERT INTO resultados (
    jugador,
    pregunta1,
    respuesta1,
    respuestausuario1,
    pregunta2,
    respuesta2,
    respuestausuario2,
    pregunta3,
    respuesta3,
    respuestausuario3,
    pregunta4,
    respuesta4,
    respuestausuario4,
    pregunta5,
    respuesta5,
    respuestausuario5) 
    VALUES 
    (
        '$datos[0]',
        '$datos[1]',
        '$datos[2]',
        '$datos[3]',
        '$datos[4]',
        '$datos[5]',
        '$datos[6]',
        '$datos[7]',
        '$datos[8]',
        '$datos[9]',
        '$datos[10]',
        '$datos[11]',
        '$datos[12]',
        '$datos[13]',
        '$datos[14]',
        '$datos[15]'
         )");

$consulta = mysqli_query($conexion, $query);


?>

<body>

    <div class="res">
        <h1>Los Reslutados</h1>

        <h3><?php echo $datos[0]; ?></h3>
        <table class="table table-dark table-borderless">
            <thead>
             
                <tr>
                    <th>Pregunta</th>
                    <th>Tú Respuesta</th>
                    <th>Respuesta Correcta</th>
                </tr>
                <tr>
                    <td><?php echo $datos[1] ?></td>
                    <td><?php echo $datos[2] ?></td>
                    <td><?php echo $datos[3] ?></td>
                </tr>
                <tr>
                    <td><?php echo $datos[4] ?></td>
                    <td><?php echo $datos[5] ?></td>
                    <td><?php echo $datos[6] ?></td>
                </tr>
                <tr>
                    <td><?php echo $datos[7] ?></td>
                    <td><?php echo $datos[8] ?></td>
                    <td><?php echo $datos[9] ?></td>
                </tr>
                <tr>
                    <td><?php echo $datos[10] ?></td>
                    <td><?php echo $datos[11] ?></td>
                    <td><?php echo $datos[12] ?></td>
                </tr>
                <tr>
                    <td><?php echo $datos[13] ?></td>
                    <td><?php echo $datos[14] ?></td>
                    <td><?php echo $datos[15] ?></td>
                </tr>

            </thead>
            <tbody>
        </table>
    
        <form action="" method="POST">
          
         <a href="index.php">Volver al inicio</a>
  
        </form>
    </div>


    <?php 


$archivo = fopen('archivo.txt' , 'a');

fwrite( $archivo, "nombre del jugador: "  );
fwrite($archivo ,  $datos[0]);
fwrite( $archivo, "\n");

fwrite( $archivo, "pregunta1: "  );
fwrite($archivo ,  $datos[1]);
fwrite( $archivo, "\n");
fwrite( $archivo, "respuesta usuario 1: "  );
fwrite($archivo ,  $datos[2]);
fwrite( $archivo, "\n");
fwrite( $archivo, "respuesta real 1: "  );
fwrite($archivo ,  $datos[3]);
fwrite( $archivo, "\n");

fwrite( $archivo, "pregunta2: "  );
fwrite($archivo ,  $datos[4]);
fwrite( $archivo, "\n");
fwrite( $archivo, "respuesta usuario 2: "  );
fwrite($archivo ,  $datos[5]);
fwrite( $archivo, "\n");
fwrite( $archivo, "respuesta real 2: "  );
fwrite($archivo ,  $datos[6]);
fwrite( $archivo, "\n");
fwrite( $archivo, "pregunta3: "  );
fwrite($archivo ,  $datos[7]);
fwrite( $archivo, "\n");
fwrite( $archivo, "respuesta usuario 3: "  );
fwrite($archivo ,  $datos[8]);
fwrite( $archivo, "\n");
fwrite( $archivo, "respuesta real 3: "  );
fwrite($archivo ,  $datos[9]);
fwrite( $archivo, "\n");
fwrite( $archivo, "pregunta4: "  );
fwrite($archivo ,  $datos[10]);
fwrite( $archivo, "\n");
fwrite( $archivo, "respuesta usuario 4: "  );
fwrite($archivo ,  $datos[11]);
fwrite( $archivo, "\n");
fwrite( $archivo, "respuesta real 3: "  );
fwrite($archivo ,  $datos[12]);
fwrite( $archivo, "\n");
fwrite( $archivo, "pregunta5: "  );
fwrite($archivo ,  $datos[13]);
fwrite( $archivo, "\n");
fwrite( $archivo, "respuesta usuario 5: "  );
fwrite($archivo ,  $datos[14]);
fwrite( $archivo, "\n");
fwrite( $archivo, "respuesta real 5: "  );
fwrite($archivo ,  $datos[15]);
fwrite( $archivo, "\n");
fwrite($archivo, "------------------");

fwrite($archivo, "\n");
fclose($archivo);

    
        
    ?>

<?php include('../includes/foot.php'); ?>
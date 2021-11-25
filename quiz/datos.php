<?php

include('./database.php'); /*base de datos*/ 



if(isset($_POST['nombre'])){
    session_start();
    $nombre_jugador = $_POST['jugador'];
    $_SESSION['jugador'] = $nombre_jugador;

    if($nombre_jugador == ''){
        session_start();

        header('location:src/index.php');
    }

    else{
        
        header('location:src/aviso.php');

    }
}

/* consultas a cada una de las preguntas */
if(isset($_POST['enviar'])){
    session_start();
    $respuesta1 = $_POST['opc1'];
    
    $query = 'Select * FROM preguntas WHERE id = 7';
    $consulta = mysqli_query($conexion, $query);
    $row = mysqli_fetch_array($consulta);
    $respuestaverdadera = $row['respuestaverdadera'];
    $pregunta1 = $row['pregunta'];
    $_SESSION['pregunta1'] = $pregunta1;
    $_SESSION['respuesta1'] = $respuesta1;
    $_SESSION['respuestaverdadera1'] = $respuestaverdadera;
    header('location:src/pregunta2.php');
   

}


if(isset($_POST['enviar2'])){
    session_start();
    $respuesta2 = $_POST['opc2'];
    $query2 = 'Select * FROM preguntas WHERE id = 8';
    $consulta2 = mysqli_query($conexion, $query2);
    $row2 = mysqli_fetch_array($consulta2);
    $respuestaverdadera2 = $row2['respuestaverdadera'];
    $pregunta2 = $row2['pregunta'];
    $_SESSION['pregunta2'] = $pregunta2;
    $_SESSION['respuesta2'] = $respuesta2;
    $_SESSION['respuestaverdadera2'] = $respuestaverdadera2;
    header('location:src/pregunta3.php');
    
}




if(isset($_POST['enviar3'])){
    session_start();
    $respuesta3 = $_POST['opc3'];

    $query3 = 'Select * FROM preguntas WHERE id = 9';
    $consulta3 = mysqli_query($conexion, $query3);
    $row3 = mysqli_fetch_array($consulta3);
    $respuestaverdadera3 = $row3['respuestaverdadera'];
    $pregunta3 = $row3['pregunta'];
    $_SESSION['pregunta3'] = $pregunta3;
    $_SESSION['respuesta3'] = $respuesta3;
    $_SESSION['respuestaverdadera3'] = $respuestaverdadera3;
    header('location:src/pregunta4.php');
   
}


if(isset($_POST['enviar4'])){
    session_start();
    $respuesta4 = $_POST['opc4'];
    $query4 = 'Select * FROM preguntas WHERE id = 10';
    $consulta4 = mysqli_query($conexion, $query4);
    $row4 = mysqli_fetch_array($consulta4);
    $respuestaverdadera4 = $row4['respuestaverdadera'];
    $pregunta4 = $row4['pregunta'];
    $_SESSION['pregunta4'] = $pregunta4;
    $_SESSION['respuesta4'] = $respuesta4;
    $_SESSION['respuestaverdadera4'] = $respuestaverdadera4;
    header('location:src/pregunta5.php');
  
}

if(isset($_POST['enviar5'])){
    session_start();
    $respuesta5 = $_POST['opc5'];
    $query5 = 'Select * FROM preguntas WHERE id = 11';
    $consulta5 = mysqli_query($conexion, $query5);
    $row5 = mysqli_fetch_array($consulta5);
    $respuestaverdadera5 = $row5['respuestaverdadera'];
    $pregunta5 = $row5['pregunta'];
    $_SESSION['pregunta5'] = $pregunta5;
    $_SESSION['respuesta5'] = $respuesta5;
    $_SESSION['respuestaverdadera5'] = $respuestaverdadera5;

    header('location:src/resultados.php');
}

?>
<?php include('../includes/header.php');?>

<body>



<div class="pregunta-uno">
 
    <h1>Quiz!!</h1>
    <div class="imgcontenedor">
        <img src="../img/saturno.jpg" alt="">
    </div>
    <h2>¿Cuál es la luna más grande de Saturno?</h2>
    <form action="../datos.php" method="POST">
    <select name="opc3" id="">
        <option name="Mimas">Mimas</option>
        <option value="Dione">Dione</option>
        <option value="Titán">Titán</option>
        <option value="Europa">Europa</option>
    </select>
    <button type="submit" name="enviar3">siguiente</button>
</form>
</div>





<?php include('../includes/foot.php');?>
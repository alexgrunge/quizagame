<?php include('../includes/header.php');?>

<body>



<div class="pregunta-uno">
 
    <h1>Quiz!!</h1>
    <div class="imgcontenedor">
        <img src="../img/notas.jpg" alt="">
    </div>
    <h2>¿Cuántas notas musicales existen?</h2>
    <form action="../datos.php" method="POST">
    <select name="opc4" id="">
        <option name="8">8</option>
        <option value="12">12</option>
        <option value="7">7</option>
        <option value="10">10</option>
    </select>
    <button type="submit" name="enviar4">siguiente</button>
</form>
</div>





<?php include('../includes/foot.php');?>
<?php include('../includes/header.php');?>




<body>



<div class="pregunta-uno">
 
    <h1>Quiz!!</h1> <div>
     
    </div>
    <div class="imgcontenedor">
        <img src="../img/rio.jpg" alt="">
    </div>
   
    <h2>¿Cuál es el río más largo del mundo?</h2>
    <form action="../datos.php" method="POST">
    <select name="opc1" id="">
        <option name="El Nilo"> El Nilo</option>
        <option value="El Obi"> El Obi</option>
        <option value="El Misisipi"> El Misisipi</option>
        <option value="El Amazonas"> El Amazonas</option>
    </select>
    <button type="submit" name="enviar">siguiente</button>
</form>
</div>





<?php include('../includes/foot.php');?>
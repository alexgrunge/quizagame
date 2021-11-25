<?php include('../includes/header.php');?>


<body>



<div class="pregunta-uno">
 
    <h1>Quiz!!</h1>
    
    <div class="imgcontenedor">
        <img src="../img/transilvania.jpg" alt="">
    </div>
    <h2>¿Dónde está Transilvania?</h2>
    <form action="../datos.php" method="POST">
    <select name="opc2" id="">
        <option name="En Rumania">En Rumania</option>
        <option value="En Russia">En Russia</option>
        <option value="En Noruega">En Noruega</option>
        <option value="En Irlanda">En Irlanda</option>
    </select>
    <button type="submit" name="enviar2">siguiente</button>
</form>
</div>





<?php include('../includes/foot.php');?>
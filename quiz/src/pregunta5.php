<?php include('../includes/header.php');?>

<body>



<div class="pregunta-uno">
 
    <h1>Quiz!!</h1>
    <div class="imgcontenedor">
        <img src="../img/penicilina.jpg" alt="">
    </div>
    <h2>¿Quién descubrió la penicilina?</h2>
    <form action="../datos.php" method="POST">
    <select name="opc5" id="">
        <option name="William Olser">William Olser</option>
        <option value="Edwar Jenner">Edwar Jenner</option>
        <option value="Louis Pasteur">Louis Pasteur</option>
        <option value="Alexander Fleming">Alexander Fleming</option>
    </select>
    <button type="submit" name="enviar5">siguiente</button>
</form>
</div>





<?php include('../includes/foot.php');?>
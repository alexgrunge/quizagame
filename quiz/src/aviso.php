<?php include('../includes/header.php');?>

<body>


<div class="contenedor-aviso">
    <form action="aviso.php" method="POST">
    <h1>Quiz!!</h1>
    <h2>Este es un Quiz de cultura general</h2>
    <h2>Son 5 preguntas de opcion multiple </h2>
    <button type="submit" name="cancelar" class="cancelar">Regresar</button>
    <button type="submit" name="entrar" class="ok">Ingresar</button>
    </form>
</div>

<?php
  if(isset($_POST['cancelar'])){
    header('location:index.php');
}
if(isset($_POST['entrar'])){
    header('location:pregunta1.php');
    
}?>

<?php include('../includes/foot.php');?>
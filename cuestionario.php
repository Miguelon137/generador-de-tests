<html>
<head>
    <Title>cuestionario</Title>
    <style>
    </style>
</head>
<body>
<?php 
$x=($_POST['nombre']) 
?>
   <h2>Hola <?php echo ($x) ?> es hora de empezar con el test</h2>
<?php 
   
       
?>
<form action="resultado.php" method="post">
    <p><input type="submit" name= "submit" value="Finalizar"/></p>
<a href="resultado.php?xy=<?php echo $x;?>">
</form>    
</body>
</html>
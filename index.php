<html>
<head>
    <Title>Index test</Title>
    <style>
    </style>
</head>
<body>
   <h1>Bienvenido al generador de testos</h1>
<?php
   $db = new Sqlite3('test.db');
   $db->exec("CREATE TABLE IF NOT EXISTS test(id INTEGER PRIMARY KEY, opcio1 text not null, opcio2 text not null, opcio3 text not null, resultado varchar not null)");
      if (isset($_POST['submit'])){
         
          $resultado = $_POST['resultado'];
          $opcio1 = $_POST['opcio1'];
          $opcio2 = $_POST['opcio2'];
          $opcio3 = $_POST['opcio3'];
          $stm = $db-> prepare("INSERT INTO test(opcio1, opcio2, opcio3, resultado) VALUES (?, ?, ?, ?)")
          $stm->bindParam(1, $opcio1);
          $stm->bindParam(2, $opcio2);
          $stm->bindParam(3, $opcio3);
          $stm->bindParam(4, $resultado);
          $stm->execute();
       
?>
<form action="index.php" method="post">
    <p><input type="submit" name= "submit" value="Comienzo"/></p>    
</body>
</html>

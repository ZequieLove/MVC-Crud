<!DOCTYPE html>
<html>

<head>
  <title>Refaccionaria</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php print RUTA_APP.'/img/favicon.jpg'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php print RUTA_APP.'/public/css/main.css'; ?>">
  <header>
  <h1 class="titulo">Refaccionaria Zequi</h1>
    </header>
</head>
<body>
  <table class="tabla">
    <thead>
      <th>id</th>
      <th>modelo</th>
      <th>Año</th>
      <th>pieza</th>
      <th>Modificar</th>
      <th>Borrar</th>
    </thead>
    
    <tbody>
      <?php
      for ($i=0; $i < count($data); $i++) { 
        print "<tr>";
        print "<td>".$data[$i]["id"]."</td>";
        print "<td>".$data[$i]["modelo"]."</td>";
        print "<td>".$data[$i]["año"]."</td>";
        print "<td>".$data[$i]["pieza"]."</td>";
        print "<td><a href='".RUTA_APP."refacciones/modificar/".$data[$i]["id"]."'>Modificar</a></td>";
        print "<td><a href='".RUTA_APP."refacciones/borrar/".$data[$i]["id"]."'>Borrar</a></td>";
        print "</tr>";
      }
    ?>
    
    </tbody>
  </table>
  <br>
  <a href='<?php print RUTA_APP."refacciones/alta/"; ?>'>Dar de alta</a>
</body>
<footer>
  <p >Bienvenidos a Refaccionaria Zequi</p>

  <a href="info.php">Informacion</a>
  
</footer>
</html>

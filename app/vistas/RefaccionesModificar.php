<!DOCTYPE html>
<html>
<head>
  <title>Modificar </title>
  <meta charset="utf-8">
</head>
<body>
  <form action='<?php print RUTA_APP."refacciones/modificar/"; ?>' method="POST">
    <table>
      <tr><td><label for="modelo">Modelo:</label></td>
        <td><input type="text" name="modelo" value="<?php print $data["modelo"]; ?>"></td>
      </tr>
      <tr><td><label for="año">Año:</label></td>
        <td><input type="int" name="año" value="<?php print $data["año"]; ?>"></td>
      </tr>
      <tr><td><label for="pieza">Pieza:</label></td>
        <td><input type="text" name="pieza" value="<?php print $data["pieza"]; ?>"></td>
      </tr>
      <tr><td><input type="hidden" value="<?php print $data["id"]; ?>" name="id"></td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
  </form>
  <a href='<?php print RUTA_APP."refacciones/"; ?>'>Regresar</a>
</body>
</html>
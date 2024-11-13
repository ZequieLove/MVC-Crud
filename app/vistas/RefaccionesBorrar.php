<!DOCTYPE html>
<html>
<head>
  <title>Dar de alta</title>
  <meta charset="utf-8">
</head>
<body>
  <form action='<?php print RUTA_APP."refacciones/borrar/"; ?>' method="POST">
    <table>
      <tr><td><label for="modelo">Modelo:</label></td>
        <td><input type="text" name="modelo" disabled="disabled" value="<?php print $data["modelo"]; ?>"></td>
      </tr>
      <tr><td><label for="año">Año:</label></td>
        <td><input type="text" name="año" disabled="disabled" value="<?php print $data["año"]; ?>"></td>
      </tr>
      <tr><td><label for="pieza">Pieza:</label></td>
        <td><input type="text" name="pieza" disabled="disabled" value="<?php print $data["pieza"]; ?>"></td>
      </tr>
      <tr><td><input type="hidden" value="<?php print $data["id"]; ?>" name="id"></td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
    <p>ADVERTENCIA: Una vez borrado el registro NO se podrá recuperar.</p>
  </form>
  <a href='<?php print RUTA_APP."refacciones/"; ?>'>Regresar</a>
</body>
</html>
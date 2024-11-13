<!DOCTYPE html>
<html>
<head>
  <title class="alta">Dar de alta </title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php print RUTA_APP.'/img/favicon.jpg'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php print RUTA_APP.'../public/css/main.css'; ?>">
</head>
<body>
   <h1 >Dar de alta</h1>
  <fieldset>
   
  <form action='<?php print RUTA_APP."Refacciones/alta/"; ?>' method="POST">
    <table>
      <tr><td ><label for="modelo">Modelo:</label></td>
        <td class="cien"><input type="text" name="modelo"></td>
      </tr>
      <tr><td><label for="año">Año:</label></td>
        <td class="cien"><input type="text" name="año"></td>
      </tr>
      <tr><td><label for="pieza">Pieza:</label></td>
        <td class="cien"><input type="text" name="pieza"></td>
      </tr>
      <tr><td>&nbsp;</td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
  </form>
  </fieldset>
  <a href='<?php print RUTA_APP."refacciones/"; ?>'>Regresar</a>
</body>
</html>
<?php
/**
 * Libros
 */
class Refacciones extends Controlador{
  private $modelo;
  function __construct()
  {
    $this->modelo = $this->modelo("RefaccionesModelo");
  }

  public function index(){
    $data = $this->modelo->getRefacciones();
    //llamamos a la vista
    $this->vista("RefaccionesVista",$data);
  }

  public function modificar($id="")
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";
      $modelo = isset($_POST["modelo"])?$_POST["modelo"]:"";
      $año = isset($_POST["año"])?$_POST["año"]:"";
      $pieza = isset($_POST["pieza"])?$_POST["pieza"]:"";

      $this->modelo->modificarRefacciones($id, $modelo, $año, $pieza);

    } else {
      $data = $this->modelo->getoneRefacciones($id);
      $datos = [
        "id" => $id,
        "modelo" => $data[0]["modelo"],
        "año" => $data[0]["año"],
        "pieza" => $data[0]["pieza"]
      ];
      $this->vista("RefaccionesModificar",$datos);
    }
  }

  public function borrar($id="")
  {
   if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";

      $this->modelo->borrarRefacciones($id);

    } else {
      $data = $this->modelo->getRefacciones($id);
      $datos = [
        "id" => $id,
        "modelo" => $data[0]["modelo"],
        "año" => $data[0]["año"],
        "pieza" => $data[0]["pieza"]
      ];
      $this->vista("RefaccionesBorrar",$datos);
    }
  }

  public function alta()
  {
    if ($_SERVER['REQUEST_METHOD']=="POST")
	{
      $modelo = isset($_POST["modelo"])?$_POST["modelo"]:"";
      $año = isset($_POST["año"])?$_POST["año"]:"";
      $pieza = isset($_POST["pieza"])?$_POST["pieza"]:"";

      $this->modelo->insertarRefacciones($modelo, $año, $pieza);

    } else {
      $this->vista("RefaccionesAlta");
    }
  }
}
?>
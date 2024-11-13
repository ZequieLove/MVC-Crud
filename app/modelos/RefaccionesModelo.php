<?php
/**
 * Libros Modelo
 */
class RefaccionesModelo{
  private $db;
  
  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function getRefacciones(){
    $data = $this->db->querySelect("SELECT * FROM refacciones"); 
    return $data;
  }

  public function getoneRefacciones($id){
    $data = $this->db->querySelect("SELECT * FROM refacciones WHERE id=".$id);
    //var_dump($data);  (nos sirve para mandar a llamar $)
    return $data;
  }

  public function insertarRefacciones($modelo, $año, $pieza)
  {
    $sql = "INSERT INTO refacciones (id,modelo,año,pieza) VALUES(0,";//0:autoincrementa ID
    $sql.= "'".$modelo."', ";
    $sql.= "'".$año."', ";
    $sql.= "'".$pieza."')";
    if ($this->db->queryNoSelect($sql))
	{
      header("location:".RUTA_APP."refacciones");
      exit();
    } else {
      exit("Error al insertar los datos");
    }
  }

  public function modificarRefacciones($id, $modelo, $año, $pieza){
    $sql = "UPDATE refacciones SET ";
    $sql.= "modelo='".$modelo."', ";
    $sql.= "año='".$año."', ";
    $sql.= "pieza='".$pieza."' ";
    $sql.= "WHERE id=".$id;
    print $sql;
    if ($this->db->queryNoSelect($sql)) {
      header("location:".RUTA_APP."refacciones");
      exit();
    } else {
      exit("Error al modificar los datos");
    }
  }

  public function borrarRefacciones($id){
    $sql = "DELETE FROM refacciones ";
    $sql.= "WHERE id=".$id;
    if ($this->db->queryNoSelect($sql)) {
      header("location:".RUTA_APP."refacciones");
      exit();
    } else {
      exit("Error al borrar");
    }
  }
}
?>
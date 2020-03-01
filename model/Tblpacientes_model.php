<?php 
class Tblpacientes_model{

    private $bd;
    private $tblpacientes;

    public function __construct(){
        $this->bd = Conexion::getConexion();
        $this->tblpacientes = array();
    }

    public function insertarPacientes($dato){
        $numerodocumento = $dato['numerodocumento'];
        $tipodocumento = $dato['tipodocumento'];
        $nombre = $dato['nombre'];
        $consulta = "INSERT INTO tblpecientes (numerodocumento, tipodocumento, nombre) VALUES ('$numerodocumento,$tipodocumento,$nombre')";
        mysqli_query($this->bd, $consulta) or die ("Error al insertar la categoría");
    }

}

?>
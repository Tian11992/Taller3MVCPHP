<?php 
class Tblmedicos_model{

    private $bd;
    private $tblmedicos;

    public function __construct(){
        $this->bd = Conexion::getConexion();
        $this->tblmedicos = array();
    }

    public function insertarMedicos($dato){
        $numerodocumento = $dato['numerodocumento'];
        $tipodocumento = $dato['tipodocumento'];
        $nombre = $dato['nombre'];
        $consulta = "INSERT INTO tblmedicos (numerodocumento, tipodocumento, nombre) VALUES ('$numerodocumento,$tipodocumento,$nombre')";
        mysqli_query($this->bd, $consulta) or die ("Error al insertar la categoría");
    }

}

?>
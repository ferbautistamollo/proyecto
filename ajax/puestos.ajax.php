<?php 

require_once "../controlador/puestos.controlador.php";
require_once "../modelo/puestos.modelo.php";

class ajaxpuestos{

    public $idpuestos2;
    public function ajaxEditarpuestos(){
        $item = "id_puestos";
        $valor = $this->idpuestos2;
        $respuesta = ctrpuestos::ctrVerpuestos($item,$valor);
        echo json_encode($respuesta);
    }

    public $idpuestos1;
    public function ajaxEliminarpuestos(){     
        $valor = $this->idpuestos1;
        $respuesta = ctrpuestos::ctrEliminarpuestos($valor);  
        echo $respuesta;
    }
}

//editar usuario

if(isset($_POST["idpuestos2"])){

$editar = new ajaxpuestos();
$editar->idpuestos2 = $_POST["idpuestos2"];
$editar->ajaxEditarpuestos();

}

//eliminar puestos

if(isset($_POST["idpuestos1"])){

$eliminar = new ajaxpuestos();
$eliminar->idpuestos1 = $_POST["idpuestos1"];
$eliminar->ajaxEliminarpuestos();

}

?>
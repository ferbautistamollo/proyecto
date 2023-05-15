<?php 

require_once "../controlador/unidades.controlador.php";
require_once "../modelo/unidades.modelo.php";

class ajaxunidades{

    public $idunidades2;
    public function ajaxEditarunidades(){
        $item = "id_unidades";
        $valor = $this->idunidades2;
        $respuesta = ctrunidades::ctrVerunidades($item,$valor);
        echo json_encode($respuesta);
    }

    public $idunidades1;
    public function ajaxEliminarunidades(){     
        $valor = $this->idunidades1;
        $respuesta = ctrunidades::ctrEliminarunidades($valor);  
        echo $respuesta;
    }
}

//editar usuario

if(isset($_POST["idunidades2"])){

$editar = new ajaxunidades();
$editar->idunidades2 = $_POST["idunidades2"];
$editar->ajaxEditarunidades();

}

//eliminar unidades

if(isset($_POST["idunidades1"])){

$eliminar = new ajaxunidades();
$eliminar->idunidades1 = $_POST["idunidades1"];
$eliminar->ajaxEliminarunidades();

}

?>
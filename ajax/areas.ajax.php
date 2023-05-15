<?php 

require_once "../controlador/areas.controlador.php";
require_once "../modelo/areas.modelo.php";

class ajaxareas{

    public $idareas2;
    public function ajaxEditarareas(){
        $item = "id_areas";
        $valor = $this->idareas2;
        $respuesta = ctrareas::ctrVerareas($item,$valor);
        echo json_encode($respuesta);
    }

    public $idareas1;
    public function ajaxEliminarareas(){     
        $valor = $this->idareas1;
        $respuesta = ctrareas::ctrEliminarareas($valor);  
        echo $respuesta;
    }
}

//editar usuario

if(isset($_POST["idareas2"])){

$editar = new ajaxareas();
$editar->idareas2 = $_POST["idareas2"];
$editar->ajaxEditarareas();

}

//eliminar areas

if(isset($_POST["idareas1"])){

$eliminar = new ajaxareas();
$eliminar->idareas1 = $_POST["idareas1"];
$eliminar->ajaxEliminarareas();

}

?>
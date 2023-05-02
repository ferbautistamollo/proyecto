<?php 

require_once "../controlador/direcciones.controlador.php";
require_once "../modelo/direcciones.modelo.php";

class ajaxdirecciones{

    public $iddirecciones2;
    public function ajaxEditardirecciones(){
        $item = "id_direcciones";
        $valor = $this->iddirecciones2;
        $respuesta = ctrdirecciones::ctrVerdirecciones($item,$valor);
        echo json_encode($respuesta);
    }

    public $iddirecciones1;
    public function ajaxEliminardirecciones(){     
        $valor = $this->iddirecciones1;
        $respuesta = ctrdirecciones::ctrEliminardirecciones($valor);  
        echo $respuesta;
    }
}

//editar usuario

if(isset($_POST["iddirecciones2"])){

$editar = new ajaxdirecciones();
$editar->iddirecciones2 = $_POST["iddirecciones2"];
$editar->ajaxEditardirecciones();

}

//eliminar direcciones

if(isset($_POST["iddirecciones1"])){

$eliminar = new ajaxdirecciones();
$eliminar->iddirecciones1 = $_POST["iddirecciones1"];
$eliminar->ajaxEliminardirecciones();

}

?>
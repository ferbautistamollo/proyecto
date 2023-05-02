<?php 

require_once "../controlador/sistemasait.controlador.php";
require_once "../modelo/sistemasait.modelo.php";

class ajaxsistemasait{

    public $idsistemasait2;
    public function ajaxEditarSistemasait(){
        $item = "id_sistemasait";
        $valor = $this->idsistemasait2;
        $respuesta = ctrsistemasait::ctrVerSistemasait($item,$valor);
        echo json_encode($respuesta);
    }

    public $idsistemasait1;
    public function ajaxEliminarSistemasait(){     
        $valor = $this->idsistemasait1;
        $respuesta = ctrsistemasait::ctrEliminarSistemasait($valor);  
        echo $respuesta;
    }

    
}

//editar usuario

if(isset($_POST["idsistemasait2"])){

$editar = new ajaxsistemasait();
$editar->idsistemasait2 = $_POST["idsistemasait2"];
$editar->ajaxEditarSistemasait();

}

//eliminar sistema

if(isset($_POST["idsistemasait1"])){

$eliminar = new ajaxsistemasait();
$eliminar->idsistemasait1 = $_POST["idsistemasait1"];
$eliminar->ajaxEliminarSistemasait();

}

?>
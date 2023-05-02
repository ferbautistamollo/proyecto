<?php 

require_once "../controlador/cargos.controlador.php";
require_once "../modelo/cargos.modelo.php";

class ajaxcargos{

    public $idcargos2;
    public function ajaxEditarcargos(){
        $item = "id_cargos";
        $valor = $this->idcargos2;
        $respuesta = ctrcargos::ctrVercargos($item,$valor);
        echo json_encode($respuesta);
    }

    public $idcargos1;
    public function ajaxEliminarcargos(){     
        $valor = $this->idcargos1;
        $respuesta = ctrcargos::ctrEliminarcargos($valor);  
        echo $respuesta;
    }
}

//editar usuario

if(isset($_POST["idcargos2"])){

$editar = new ajaxcargos();
$editar->idcargos2 = $_POST["idcargos2"];
$editar->ajaxEditarcargos();

}

//eliminar cargos

if(isset($_POST["idcargos1"])){

$eliminar = new ajaxcargos();
$eliminar->idcargos1 = $_POST["idcargos1"];
$eliminar->ajaxEliminarcargos();

}

?>
<?php 

require_once "../controlador/roles.controlador.php";
require_once "../modelo/roles.modelo.php";

class ajaxRoles{

    public $idroles2;
    public function ajaxEditarRoles(){
        $item = "id_roles";
        $valor = $this->idroles2;
        $respuesta = ctrRoles::ctrVerRoles($item,$valor);
        echo json_encode($respuesta);
    }

    public $idroles1;
    public function ajaxEliminarRoles(){     
        $valor = $this->idroles1;
        $respuesta = ctrroles::ctrEliminarRoles($valor);  
        echo $respuesta;
    }
}

//editar usuario

if(isset($_POST["idroles2"])){

$editar = new ajaxRoles();
$editar->idroles2 = $_POST["idroles2"];
$editar->ajaxEditarRoles();

}

//eliminar rol

if(isset($_POST["idroles1"])){

$eliminar = new ajaxRoles();
$eliminar->idroles1 = $_POST["idroles1"];
$eliminar->ajaxEliminarRoles();

}

?>
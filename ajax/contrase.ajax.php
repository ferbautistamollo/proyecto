<?php
require_once "../controlador/contrase.controlador.php";
require_once "../modelo/contrase.modelo.php";

class AjaxContrase{

    public $idContrase;
    public $idnsistemasait;
    public function ajaxenviarcontrase(){
        $item = "id_usuarios";
        $item1 = "id_sistemasait";
        $valor = $this->idContrase;
        $valor1 = $this->idnsistemasait;
        
        $respuesta = ctrcontrase::ctrmostrarcontrase1($item,$item1,$valor,$valor1);

        
        echo json_encode($respuesta);
    }  

    
}


//enviar contrase

if(isset($_POST["idContrase"])){

    $enviar = new ajaxContrase();
    $enviar->idContrase = $_POST["idContrase"];
    $enviar->idnsistemasait = $_POST["idnsistemasait"];
    
    $enviar->ajaxenviarcontrase();
    
    
}






?>
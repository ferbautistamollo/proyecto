<?php 

require_once "../controlador/usuarios.controlador.php";
require_once "../modelo/usuarios.modelo.php";

class AjaxUsuarios{

    public $idUsuario;
    public function ajaxEditarUsuarios(){
        $item = "id_usuarios";
        $valor = $this->idUsuario;
        $respuesta = ctrusuarios::ctrmostrarusuarios1($item,$valor);       
        echo json_encode($respuesta);
    }


    public $idusuarios2;
    public function ajaxEliminarUsuarios(){
        $respuesta = ctrusuarios::ctrEliminarUsuarios($this->idusuarios2);
        echo $respuesta;    
    }

    
    public $idusuarios21;
    public function ajaxEliminarUsuarios1(){
        $respuesta = ctrusuarios::ctrEliminarUsuarios1($this->idusuarios21);
        echo $respuesta;    
    }


    public $idusuarios22;
    public function ajaxEliminarUsuarios2(){
        $respuesta = ctrusuarios::ctrEliminarUsuarios2($this->idusuarios22);
        echo $respuesta;    
    }

    public $input111;
    public function ajaxvalidar(){
        $respuesta = ctrusuarios::ctrvalidarusuario($this->input111);
        echo $respuesta;    
    }

    public $idsus1;
    public $idval1;
    public function ajaxcheck1(){
    
        $respuesta = ctrusuarios::ctrcheck1($this->idsus1,$this->idval1);
        
        echo $respuesta;
            
    }

    public $idsus;
    public $idval;
    public function ajaxcheck(){
    
        $respuesta = ctrusuarios::ctrcheck($this->idsus,$this->idval);
        
        echo $respuesta;
            
    }

 
}


//editar usuario

if(isset($_POST["idUsuario"])){
    $editar = new AjaxUsuarios();
    $editar->idUsuario = $_POST["idUsuario"];
    $editar->ajaxEditarUsuarios();    
}

//eliminar usuario

if(isset($_POST["idusuarios2"])){
    $eliminar = new AjaxUsuarios();
    $eliminar->idusuarios2 = $_POST["idusuarios2"];
    $eliminar->ajaxEliminarUsuarios();
}

//inhabilitar usuario

if(isset($_POST["idusuarios21"])){
    $eliminar = new AjaxUsuarios();
    $eliminar->idusuarios21 = $_POST["idusuarios21"];
    $eliminar->ajaxEliminarUsuarios1();
}

//habilitar usuario

if(isset($_POST["idusuarios22"])){
    $eliminar = new AjaxUsuarios();
    $eliminar->idusuarios22 = $_POST["idusuarios22"];
    $eliminar->ajaxEliminarUsuarios2();
}


if(isset($_POST["input111"])){
    $validar = new AjaxUsuarios();
    $validar->input111 = $_POST["input111"];
    $validar->ajaxvalidar();
}


if(isset($_POST["idval1"])){
    $validar11 = new AjaxUsuarios();
    $validar11->idsus1 = $_POST["idsus1"];
    $validar11->idval1 = $_POST["idval1"];
    $validar11->ajaxcheck1();
}

if(isset($_POST["idval"])){
    $validar1 = new AjaxUsuarios();
    $validar1->idsus = $_POST["idsus"];
    $validar1->idval = $_POST["idval"];
    $validar1->ajaxcheck();
}



?>


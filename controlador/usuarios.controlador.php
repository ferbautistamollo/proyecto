<?php

class ctrusuarios{

    static public function ctrmostrarusuarios1($item,$valor){
        $respuesta=mdlusuarios::mdlmostrarusuarios1("usuarios",$item,$valor);
        return $respuesta;
    }

    static public function ctrmostrarusuarios5($valor){
        $item="id_usuarios";
        $tabla="usuarios";
        $respuesta=mdlusuarios::mdlmostrarusuarios5($tabla,$item,$valor);
        return $respuesta;
    }

    static public function ctrvalidarusuario($input111){
        
        $respuesta=mdlusuarios::mdlvalidarusuario($input111);
        return $respuesta;
    }

    static public function ctrmostrarusuarios(){
        $tabla="usuarios";
        $respuesta=mdlusuarios::mdlmostrarusuarios($tabla);
        return $respuesta;   
    }

    static public function ctrmostrarusuariostotal(){
        $tabla="usuarios";
        $respuesta=mdlusuarios::mdlmostrarusuariostotal($tabla);
        return $respuesta;   
    }

   

    static public function ctrmostrarusuariosf(){
        $tabla="usuarios";
        $tabla1="contrase";
        $respuesta=mdlusuarios::mdlmostrarusuariosf($tabla,$tabla1);
        return $respuesta;   
    }

    static public function ctrmostrarusuariosf1(){
        $tabla="usuarios";
        $tabla1="contrase";
        $respuesta=mdlusuarios::mdlmostrarusuariosf1($tabla,$tabla1);
        return $respuesta;   
    }

    static public function ctrmostrarusuariosf2(){
        $tabla="usuarios";
        $tabla1="contrase";
        $respuesta=mdlusuarios::mdlmostrarusuariosf2($tabla,$tabla1);
        return $respuesta;   
    }

    static public function ctrmostrarusuariosU($valor){
        $tabla="usuarios";
        $respuesta=mdlusuarios::mdlmostrarusuariosU($tabla,$valor);
        return $respuesta;   
    }

    static public function ctrmostrarusuarios9(){
        $tabla="usuarios";
        $respuesta=mdlusuarios::mdlmostrarusuarios9($tabla);
        return $respuesta;   
    }

    static public function ctrmostrarusuariosmail1(){
        $tabla="usuarios";
        $respuesta=mdlusuarios::mdlmostrarusuariosmail1($tabla);
        return $respuesta;   
    }

    static public function ctrmostrarusuariosmail(){
        $tabla="usuarios";
        $respuesta=mdlusuarios::mdlmostrarusuariosmail($tabla);
        return $respuesta;   
    }

    static public function ctrmostrarusuarios2($valor){
        $respuesta=mdlusuarios::mdlmostrarusuarios2($valor);
        return $respuesta;
    }

    static public function ctrguardarusuarios1(){
        if(isset($_POST["ap_usuarios1"])){
               
            //$encriptarcontraseña = crypt($_POST["con_usuarios"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
              
            $datos = array(

                "ap_usuarios" => $_POST["ap_usuarios1"],
                "nom_usuarios" => $_POST["nom_usuarios"],
                "usu_usuarios" => $_POST["usu_usuarios"],
                "ci_usuarios" => $_POST["ci_usuarios"],
                "correo_usuarios" => $_POST["correo_usuarios"],
                "contrase_usuarios" => $_POST["contrase_usuarios"],
                "id_roles" => $_POST["rol_user"],

                "id_direcciones" => $_POST["direcciones_user"] ,
                "id_unidades" => $_POST["unidades_user"] , 
                "id_areas" => $_POST["areas_user"]  ,
                "id_cargos" => $_POST["cargos_user"]  ,
                "id_puestos" => $_POST["puestos_user"],
                "fecha_inc" => $_POST["fecha_inc"],
                "fecha_nac" => $_POST["fecha_nac"],
                "item_usuarios" => $_POST["item_usuarios"],
                "ex_usuarios" =>$_POST["ex_usuarios"]

                
                
            );
                
            //echo "<pre>"; print_r($datos); echo "</pre>";
                
            $tabla="usuarios";

            $respuesta=mdlusuarios::mdlguardarusuarios1($tabla,$datos);
            
            
            
            if($respuesta != "error"){
                
                echo'<script>

                swal({

                    type:"success",
                    title: "¡CORRECTO!",
                    text: "USUARIO CREADO",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar",
                
                }).then(function(result){

                    if(result.value){   
                        history.back();
                    }


            });

            </script>';                           
            //echo "<script> setTimeout(\"location.href='/proyectos/backend/usuarios'\",1000)</script>";
            return $respuesta; 
            }else{

            echo "<div class='alert alert-danger mt-3 small'>Registro Fallido</div>";
            }  
                             
        }
    }

    static public function ctrguardarusuarioseditados1(){
        if(isset($_POST["id_usuarios"])){
               
              
            $datos = array(

                "id_usuarios" => $_POST["id_usuarios"],
                "ap_usuarios" => $_POST["ap_usuarios"],
                "nom_usuarios" => $_POST["nom_usuarios"],
                "usu_usuarios" => $_POST["usu_usuarios"],
                "ci_usuarios" => $_POST["ci_usuarios"],
                "correo_usuarios" => $_POST["correo_usuarios"],
                "contrase_usuarios" => $_POST["contrase_usuarios"],
                "id_roles" => $_POST["rol_user"],  

                "id_direcciones" => $_POST["direcciones_user"] ,
                "id_unidades" => $_POST["unidades_user"] , 
                "id_areas" => $_POST["areas_user"]  ,
                "id_cargos" => $_POST["cargos_user"]  ,
                "id_puestos" => $_POST["puestos_user"],
                "fecha_inc" => $_POST["fecha_inc"],
                "fecha_nac" => $_POST["fecha_nac"],
                "item_usuarios" => $_POST["item_usuarios"],
                "ex_usuarios" =>$_POST["ex_usuarios"]                     
            );
                                
            $tabla="usuarios";
            $item="id_usuarios";

            $respuesta=mdlusuarios::mdlguardarusuarioseditados1($tabla,$item,$datos);
            
            if($respuesta == "ok"){

                echo'<script>

                swal({

                    type:"success",
                    title: "¡CORRECTO!",
                    text: "USUARIO EDITADO",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar",
                
                }).then(function(result){

                    if(result.value){   
                        history.back();
                    }


            });

            </script>';                           

            }else{

            echo "<div class='alert alert-danger mt-3 small'>Registro Fallido</div>";
            }                      
        }
    }

    static public function  ctrEliminarUsuarios($idusuarios2){
		
		$tabla1 = "contrase";
        $tabla2 = "usuarios";

		$respuesta = mdlusuarios::mdlEliminarUsuarios($tabla1,$tabla2,$idusuarios2);

		return $respuesta;

    }

    static public function  ctrEliminarUsuarios1($idusuarios21){
		
		
        $tabla2 = "usuarios";

		$respuesta = mdlusuarios::mdlEliminarUsuarios1($tabla2,$idusuarios21);

		return $respuesta;

    }

    static public function  ctrEliminarUsuarios2($idusuarios22){
		
		
        $tabla2 = "usuarios";

		$respuesta = mdlusuarios::mdlEliminarUsuarios2($tabla2,$idusuarios22);

		return $respuesta;

    }
    
    static public function  ctrcheck1($idsus1,$idval1){
		
        $tabla = "usuarios";


		$respuesta = mdlusuarios::mdlcheck1($tabla,$idsus1,$idval1);
	
        return $respuesta;
 
    }

    static public function  ctrcheck($idsus,$idval){
		
        $tabla = "usuarios";


		$respuesta = mdlusuarios::mdlcheck($tabla,$idsus,$idval);
	
        return $respuesta;
 
    }



    static public function ctringresoadministradores(){
        if(isset($_POST["ingresousuarios"])){                  
            $tabla="usuarios";
            $item="usu_usuarios";
            $valor=$_POST["ingresousuarios"];
            $valor1=$_POST["ingresocontrase"];

            $respuesta=mdlusuarios::mdlmostrarusuarios1($tabla,$item,$valor);

            if(is_array($respuesta)>0){
            if($respuesta["usu_usuarios"]==$_POST["ingresousuarios"] && password_verify($valor1, $respuesta["cont_usuarios"]) ){
            
                $_SESSION["validarsesion"]="ok";
                $_SESSION["idbackend"]=$respuesta["id_usuarios"];
                $_SESSION['modal_mostrado']=false;

                echo '<script> 
                    window.location="envios";
                </script>';
                
            }else{
                echo "<div class='alert alert-danger mt-3 small'>ERROR: Usuario y/o contraseña incorrecta</div>";                
            }

            }else{
                echo "<div class='alert alert-danger mt-3 small'>ERROR: Usuario y/o contraseña incorrecta</div>";                
            }
        }      
    }


}

?>
<?php

class ctrsistemasait{
      
    static public function ctrmostrarsistemasait(){
        $tabla="sistemasait";
        $respuesta=mdlsistemasait::mdlmostrarsistemasait($tabla);
        return $respuesta;      
    }

    static public function ctrmostrarsistemasaitDS($id_rol){
        $tabla="sistemasait";
        $respuesta=mdlsistemasait::mdlmostrarsistemasaitDS($tabla,$id_rol);
        return $respuesta;      
    }

   

    static public function ctrsistemasexistentes($id_usu,$id_sis){
        $tabla1="contrase";
        $tabla2="sistemasait";
        $respuesta=mdlsistemasait::mdlsistemasaitexistentes($tabla1,$tabla2,$id_usu,$id_sis);
        return $respuesta;

    }

    static public function ctrVerSistemasait($item,$valor){

        $tabla="sistemasait";

        $respuesta = mdlsistemasait::mdlVerSistemasait($tabla,$item,$valor);

        return $respuesta;

    }
/*
    static public function ctrmostrarsistemasaitexisten(){
        $tabla="sistemasait";
        $tabla1="sistemasait";
        $respuesta=mdlsistemasait::mdlmostrarsistemasaitexisten($tabla);
        return $respuesta;      
    }
*/

    

    static public function ctrnsistemasait(){       
        $respuesta=mdlsistemasait::mdlnsistemasait();
        return $respuesta;  
    }

    static public function ctrguardarsistemasait(){
        if(isset($_POST["rol_usersis1"])){

            $datos = array(

                "nom_sistemasait" => $_POST["nom_sistemasait"],
                "url_sistemasait" => $_POST["url_sistemasait"],
                "id_roles" => $_POST["rol_usersis1"] 
                                       
            );

            $respuesta = mdlsistemasait::mdlguardarsistemasait($datos);

            if($respuesta != "error"){

                echo'<script>

                swal({
                        type:"success",
                        title: "¡CORRECTO!",
                        text: "Sistema creado correctamente",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        
                    
                }).then(function(result){

                        if(result.value){   
                            history.back();
                        } 
                });

            </script>';
            return $respuesta;
            }else{

            echo "<div class='alert alert-danger mt-3 small'>Registro Fallido</div>";
            }
        }
    }

    static public function ctrmostrarsistemasait2($valor){
        $respuesta=mdlsistemasait::mdlmostrarsistemasait2($valor);
        return $respuesta;
    }

   


    static public function  ctrEliminarSistemasait($idsistemasait1){
		
		$tabla1 = "contrase";
        $tabla2 = "sistemasait";

		$respuesta = mdlsistemasait::mdlEliminarSistemasait($tabla1,$tabla2,$idsistemasait1);

		return $respuesta;

    }
    
    static public function ctrguardarsistemasaiteditado(){
        if(isset($_POST["id_sise"])){

            $datos = array(

                "id_sistemasait" => $_POST["id_sise"],
                "nom_sistemasait" => $_POST["nom_sise"],
                "url_sistemasait" => $_POST["url_sise"],
                "id_roles" => $_POST["rol_usersise"]                 
            );

            $respuesta = mdlsistemasait::mdlguardarsistemasaiteditado($datos);
            if($respuesta == "ok"){

                echo'<script>

                swal({
                        type:"success",
                        title: "¡CORRECTO!",
                        text: "Sistema creado correctamente",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        
                    
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

    
    
}

?>
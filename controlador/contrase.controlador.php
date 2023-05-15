<?php

    class ctrcontrase{

        static public function ctrmostrarcontrase(){
            $tabla="contrase";
            $respuesta=mdlcontrase::mdlmostrarcontrase($tabla);
            return $respuesta;
        }

        static public function ctrmostrarcontrase1($item,$item1,$valor,$valor1){
            $tabla="contrase";
            $respuesta=mdlcontrase::mdlmostrarcontrase1($tabla,$item,$valor,$item1,$valor1);                
            return $respuesta;
        }

        
        static public function ctreditarcontrase1($sistemasait){
            if(isset($_POST["idusu5"])){                  
                //$encriptarcontraseña = crypt($_POST["con_usuarios"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');                  
                $tabla="contrase";
                $tabla1="sistemasait";
                $idusu=$_POST["idusu5"];

                $datos=array();
                
                foreach($sistemasait as $key => $value){
                    array_push($datos,$_POST["$value[id_sistemasait]"]);
                }

               
                $respuesta=mdlcontrase::mdleditarcontrase1($idusu,$datos,$sistemasait,$tabla,$tabla1);

                if($respuesta == "ok"){

                    echo'<script>
    
                    swal({
                            type:"success",
                            title: "¡CORRECTO!",
                            text: "Contraseña Guardado",
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

        static public function ctrguardarcontrase($sistemasait,$idusu){
            if(isset($_POST["ap_usuarios1"])){                  
                                  
                $tabla="contrase";
                $tabla1="sistemasait";
                            
                $respuesta=mdlcontrase::mdlguardarcontrase($idusu,$sistemasait,$tabla,$tabla1);

                                    
            }   
        }

        static public function ctrguardarcontrase1($usuarios,$idsis){
            if(isset($_POST["rol_usersis1"])){                  
                                  
                $tabla="contrase";
                $tabla1="sistemasait";
                            
                $respuesta=mdlcontrase::mdlguardarcontrase1($idsis,$usuarios,$tabla,$tabla1);

                                    
            }   
        }


        
    }
?>
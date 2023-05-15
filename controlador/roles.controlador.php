<?php

class ctrroles{
      
    static public function ctrmostrarroles(){
        $tabla="roles";
        $respuesta=mdlroles::mdlmostrarroles($tabla);
        return $respuesta;        
    }

    static public function ctrmostrarrolesusuarios($valor){
        $respuesta = mdlroles::mdlmostrarrolesusuarios($valor);
        return $respuesta;
    }

    static public function ctrguardarroles(){
         if(isset($_POST["nom_rol"])){       
            $tabla="roles";
            $respuesta=mdlroles::mdlguardarroles($tabla,$_POST["nom_rol"]);
            if($respuesta == "ok"){
                echo'<script>

                swal({
                        type:"success",
                        title: "¡CORRECTO!",
                        text: "Rol Creado Correctamente",
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

    static public function  ctrEliminarRoles($idroles1){
		
		$tabla1 = "roles";
       

		$respuesta = mdlroles::mdlEliminarRoles($tabla1,$idroles1);

		return $respuesta;

    }
    static public function ctrVerRoles($item,$valor){


        $tabla="roles";



        $respuesta = mdlroles::mdlVerRoles($tabla,$item,$valor);


        return $respuesta;

    }

    static public function ctrguardarroleseditados(){
        if(isset($_POST["id_rolE"])){       
           $tabla="roles";
           $respuesta=mdlroles::mdlguardarroleseditados($tabla,$_POST["nom_rolE"],$_POST["id_rolE"]);
           if($respuesta == "ok"){
               echo'<script>

						swal({
								type:"success",
							  	title: "¡CORRECTO!",
							  	text: "El rol ha sido actualizado correctamente",
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
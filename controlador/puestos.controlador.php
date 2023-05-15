<?php

class ctrpuestos{
      
    static public function ctrmostrarpuestos(){
        $tabla="puestos";
        $respuesta=mdlpuestos::mdlmostrarpuestos($tabla);
        return $respuesta;        
    }

    static public function ctrmostrarpuestosusuarios($valor){
        $respuesta = mdlpuestos::mdlmostrarpuestosusuarios($valor);
        return $respuesta;
    }

    static public function ctrguardarpuestos(){
         if(isset($_POST["nom_puestos"])){       
            $tabla="puestos";
            $respuesta=mdlpuestos::mdlguardarpuestos($tabla,$_POST["nom_puestos"]);
            if($respuesta == "ok"){
                echo'<script>

                swal({
                        type:"success",
                        title: "¡CORRECTO!",
                        text: "Direccion Creado Correctamente",
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

    static public function  ctrEliminarpuestos($idpuestos1){
		
		$tabla1 = "puestos";
       

		$respuesta = mdlpuestos::mdlEliminarpuestos($tabla1,$idpuestos1);

		return $respuesta;

    }
    static public function ctrVerpuestos($item,$valor){


        $tabla="puestos";



        $respuesta = mdlpuestos::mdlVerpuestos($tabla,$item,$valor);


        return $respuesta;

    }

    static public function ctrguardarpuestoseditados(){
        if(isset($_POST["id_puestosE"])){       
           $tabla="puestos";
           $respuesta=mdlpuestos::mdlguardarpuestoseditados($tabla,$_POST["nom_puestosE"],$_POST["id_puestosE"]);
           if($respuesta == "ok"){
               echo'<script>

						swal({
								type:"success",
							  	title: "¡CORRECTO!",
							  	text: "La direccion ha sido actualizado correctamente",
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
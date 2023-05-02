<?php

class ctrcargos{
      
    static public function ctrmostrarcargos(){
        $tabla="cargos";
        $respuesta=mdlcargos::mdlmostrarcargos($tabla);
        return $respuesta;        
    }

    static public function ctrmostrarcargosusuarios($valor){
        $respuesta = mdlcargos::mdlmostrarcargosusuarios($valor);
        return $respuesta;
    }

    static public function ctrguardarcargos(){
         if(isset($_POST["nom_cargos"])){       
            $tabla="cargos";
            $respuesta=mdlcargos::mdlguardarcargos($tabla,$_POST["nom_cargos"]);
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

    static public function  ctrEliminarcargos($idcargos1){
		
		$tabla1 = "cargos";
       

		$respuesta = mdlcargos::mdlEliminarcargos($tabla1,$idcargos1);

		return $respuesta;

    }
    static public function ctrVercargos($item,$valor){


        $tabla="cargos";



        $respuesta = mdlcargos::mdlVercargos($tabla,$item,$valor);


        return $respuesta;

    }

    static public function ctrguardarcargoseditados(){
        if(isset($_POST["id_cargosE"])){       
           $tabla="cargos";
           $respuesta=mdlcargos::mdlguardarcargoseditados($tabla,$_POST["nom_cargosE"],$_POST["id_cargosE"]);
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
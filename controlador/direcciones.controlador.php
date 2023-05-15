<?php

class ctrdirecciones{
      
    static public function ctrmostrardirecciones(){
        $tabla="direcciones";
        $respuesta=mdldirecciones::mdlmostrardirecciones($tabla);
        return $respuesta;        
    }

    static public function ctrmostrardireccionesusuarios($valor){
        $respuesta = mdldirecciones::mdlmostrardireccionesusuarios($valor);
        return $respuesta;
    }

    static public function ctrguardardirecciones(){
         if(isset($_POST["nom_direcciones"])){       
            $tabla="direcciones";
            $respuesta=mdldirecciones::mdlguardardirecciones($tabla,$_POST["nom_direcciones"]);
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

    static public function  ctrEliminardirecciones($iddirecciones1){
		
		$tabla1 = "direcciones";
       

		$respuesta = mdldirecciones::mdlEliminardirecciones($tabla1,$iddirecciones1);

		return $respuesta;

    }
    static public function ctrVerdirecciones($item,$valor){


        $tabla="direcciones";



        $respuesta = mdldirecciones::mdlVerdirecciones($tabla,$item,$valor);


        return $respuesta;

    }

    static public function ctrguardardireccioneseditados(){
        if(isset($_POST["id_direccionesE"])){       
           $tabla="direcciones";
           $respuesta=mdldirecciones::mdlguardardireccioneseditados($tabla,$_POST["nom_direccionesE"],$_POST["id_direccionesE"]);
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
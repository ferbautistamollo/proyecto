<?php

class ctrareas{
      
    static public function ctrmostrarareas(){
        $tabla="areas";
        $respuesta=mdlareas::mdlmostrarareas($tabla);
        return $respuesta;        
    }

    static public function ctrmostrarareasusuarios($valor){
        $respuesta = mdlareas::mdlmostrarareasusuarios($valor);
        return $respuesta;
    }

    static public function ctrguardarareas(){
         if(isset($_POST["nom_areas"])){       
            $tabla="areas";
            $respuesta=mdlareas::mdlguardarareas($tabla,$_POST["nom_areas"]);
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

    static public function  ctrEliminarareas($idareas1){
		
		$tabla1 = "areas";
       

		$respuesta = mdlareas::mdlEliminarareas($tabla1,$idareas1);

		return $respuesta;

    }
    static public function ctrVerareas($item,$valor){


        $tabla="areas";



        $respuesta = mdlareas::mdlVerareas($tabla,$item,$valor);


        return $respuesta;

    }

    static public function ctrguardarareaseditados(){
        if(isset($_POST["id_areasE"])){       
           $tabla="areas";
           $respuesta=mdlareas::mdlguardarareaseditados($tabla,$_POST["nom_areasE"],$_POST["id_areasE"]);
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
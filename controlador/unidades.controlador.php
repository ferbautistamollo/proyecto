<?php

class ctrunidades{
      
    static public function ctrmostrarunidades(){
        $tabla="unidades";
        $respuesta=mdlunidades::mdlmostrarunidades($tabla);
        return $respuesta;        
    }

    static public function ctrmostrarunidadesusuarios($valor){
        $respuesta = mdlunidades::mdlmostrarunidadesusuarios($valor);
        return $respuesta;
    }

    static public function ctrguardarunidades(){
         if(isset($_POST["nom_unidades"])){       
            $tabla="unidades";
            $respuesta=mdlunidades::mdlguardarunidades($tabla,$_POST["nom_unidades"]);
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

    static public function  ctrEliminarunidades($idunidades1){
		
		$tabla1 = "unidades";
       

		$respuesta = mdlunidades::mdlEliminarunidades($tabla1,$idunidades1);

		return $respuesta;

    }
    static public function ctrVerunidades($item,$valor){


        $tabla="unidades";



        $respuesta = mdlunidades::mdlVerunidades($tabla,$item,$valor);


        return $respuesta;

    }

    static public function ctrguardarunidadeseditados(){
        if(isset($_POST["id_unidadesE"])){       
           $tabla="unidades";
           $respuesta=mdlunidades::mdlguardarunidadeseditados($tabla,$_POST["nom_unidadesE"],$_POST["id_unidadesE"]);
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
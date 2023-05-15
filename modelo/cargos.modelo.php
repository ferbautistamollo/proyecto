<?php

require_once "conexion.php";

class mdlcargos extends conexion{

    static public function mdlmostrarcargos($tabla){
        $stmt= conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function mdlmostrarcargosusuarios($valor){
        $stmt = conexion :: conectar()-> prepare("SELECT nom_cargos FROM cargos where id_cargos = :dire"); 
        $stmt -> bindParam(":dire",$valor,PDO::PARAM_INT);
        $stmt ->execute();
        return $stmt -> fetch(); 
    }

    static public function mdlguardarcargos($tabla,$valor){
        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla(nom_cargos) VALUES(:dire); ");
        $valor1=ucwords(strtolower($valor));
        $stmt->bindParam(":dire", $valor1, PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{

            echo "error";
        }
    }

    static public function mdlEliminarcargos($tabla1,$idcargos1){


        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla1 WHERE id_cargos =:id");
        $stmt -> bindParam(":id", $idcargos1, PDO::PARAM_INT);

        $sw1=$stmt -> execute();

       
        

        if($sw1){

			return "ok";
		
		}else{

			echo "\nPDO::errorInfo():\n";
    		print_r(Conexion::conectar()->errorInfo());

		}

        

	

        

    }

    static public function mdlVercargos($tabla , $item ,$valor ){

        $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item=:IDE");


        $stmt->bindParam(":IDE", $valor, PDO::PARAM_INT);
    
 

        $stmt -> execute();

        return $stmt -> fetch();


    }   

    static public function mdlguardarcargoseditados($tabla, $nomcargos , $idcargos){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nom_cargos=:cargos_nom WHERE id_cargos =:id");


        $stmt->bindParam(":id", $idcargos, PDO::PARAM_INT);
	    $stmt->bindParam(":cargos_nom", $nomcargos, PDO::PARAM_STR);


        if($stmt -> execute()){

			return "ok";

		}else{

			echo "error";

		}

		$stmt-> close();

		$stmt = null;






    }
    
}

?>
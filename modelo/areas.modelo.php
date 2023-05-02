<?php

require_once "conexion.php";

class mdlareas extends conexion{

    static public function mdlmostrarareas($tabla){
        $stmt= conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function mdlmostrarareasusuarios($valor){
        $stmt = conexion :: conectar()-> prepare("SELECT nom_areas FROM areas where id_areas = :dire"); 
        $stmt -> bindParam(":dire",$valor,PDO::PARAM_INT);
        $stmt ->execute();
        return $stmt -> fetch(); 
    }

    static public function mdlguardarareas($tabla,$valor){
        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla(nom_areas) VALUES(:dire); ");
        $valor1=ucwords(strtolower($valor));
        $stmt->bindParam(":dire", $valor1, PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{

            echo "error";
        }
    }

    static public function mdlEliminarareas($tabla1,$idareas1){


        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla1 WHERE id_areas =:id");
        $stmt -> bindParam(":id", $idareas1, PDO::PARAM_INT);

        $sw1=$stmt -> execute();

       
        

        if($sw1){

			return "ok";
		
		}else{

			echo "\nPDO::errorInfo():\n";
    		print_r(Conexion::conectar()->errorInfo());

		}

        

	

        

    }

    static public function mdlVerareas($tabla , $item ,$valor ){

        $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item=:IDE");


        $stmt->bindParam(":IDE", $valor, PDO::PARAM_INT);
    
 

        $stmt -> execute();

        return $stmt -> fetch();


    }   

    static public function mdlguardarareaseditados($tabla, $nomareas , $idareas){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nom_areas=:areas_nom WHERE id_areas =:id");


        $stmt->bindParam(":id", $idareas, PDO::PARAM_INT);
	    $stmt->bindParam(":areas_nom", $nomareas, PDO::PARAM_STR);


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
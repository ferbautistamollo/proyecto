<?php

require_once "conexion.php";

class mdldirecciones extends conexion{

    static public function mdlmostrardirecciones($tabla){
        $stmt= conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function mdlmostrardireccionesusuarios($valor){
        $stmt = conexion :: conectar()-> prepare("SELECT nom_direcciones FROM direcciones where id_direcciones = :dire"); 
        $stmt -> bindParam(":dire",$valor,PDO::PARAM_INT);
        $stmt ->execute();
        return $stmt -> fetch(); 
    }

    static public function mdlguardardirecciones($tabla,$valor){
        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla(nom_direcciones) VALUES(:dire); ");
        $valor1=ucwords(strtolower($valor));
        $stmt->bindParam(":dire", $valor1, PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{

            echo "error";
        }
    }

    static public function mdlEliminardirecciones($tabla1,$iddirecciones1){


        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla1 WHERE id_direcciones =:id");
        $stmt -> bindParam(":id", $iddirecciones1, PDO::PARAM_INT);

        $sw1=$stmt -> execute();

       
        

        if($sw1){

			return "ok";
		
		}else{

			echo "\nPDO::errorInfo():\n";
    		print_r(Conexion::conectar()->errorInfo());

		}

        

	

        

    }

    static public function mdlVerdirecciones($tabla , $item ,$valor ){

        $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item=:IDE");


        $stmt->bindParam(":IDE", $valor, PDO::PARAM_INT);
    
 

        $stmt -> execute();

        return $stmt -> fetch();


    }   

    static public function mdlguardardireccioneseditados($tabla, $nomdirecciones , $iddirecciones){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nom_direcciones=:direcciones_nom WHERE id_direcciones =:id");


        $stmt->bindParam(":id", $iddirecciones, PDO::PARAM_INT);
	    $stmt->bindParam(":direcciones_nom", $nomdirecciones, PDO::PARAM_STR);


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
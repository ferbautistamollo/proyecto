<?php

require_once "conexion.php";

class mdlunidades extends conexion{

    static public function mdlmostrarunidades($tabla){
        $stmt= conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function mdlmostrarunidadesusuarios($valor){
        $stmt = conexion :: conectar()-> prepare("SELECT nom_unidades FROM unidades where id_unidades = :dire"); 
        $stmt -> bindParam(":dire",$valor,PDO::PARAM_INT);
        $stmt ->execute();
        return $stmt -> fetch(); 
    }

    static public function mdlguardarunidades($tabla,$valor){
        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla(nom_unidades) VALUES(:dire); ");
        $valor1=ucwords(strtolower($valor));
        $stmt->bindParam(":dire", $valor1, PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{

            echo "error";
        }
    }

    static public function mdlEliminarunidades($tabla1,$idunidades1){


        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla1 WHERE id_unidades =:id");
        $stmt -> bindParam(":id", $idunidades1, PDO::PARAM_INT);

        $sw1=$stmt -> execute();

       
        

        if($sw1){

			return "ok";
		
		}else{

			echo "\nPDO::errorInfo():\n";
    		print_r(Conexion::conectar()->errorInfo());

		}

        

	

        

    }

    static public function mdlVerunidades($tabla , $item ,$valor ){

        $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item=:IDE");


        $stmt->bindParam(":IDE", $valor, PDO::PARAM_INT);
    
 

        $stmt -> execute();

        return $stmt -> fetch();


    }   

    static public function mdlguardarunidadeseditados($tabla, $nomunidades , $idunidades){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nom_unidades=:unidades_nom WHERE id_unidades =:id");


        $stmt->bindParam(":id", $idunidades, PDO::PARAM_INT);
	    $stmt->bindParam(":unidades_nom", $nomunidades, PDO::PARAM_STR);


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
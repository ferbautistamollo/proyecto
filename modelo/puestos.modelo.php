<?php

require_once "conexion.php";

class mdlpuestos extends conexion{

    static public function mdlmostrarpuestos($tabla){
        $stmt= conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function mdlmostrarpuestosusuarios($valor){
        $stmt = conexion :: conectar()-> prepare("SELECT nom_puestos FROM puestos where id_puestos = :dire"); 
        $stmt -> bindParam(":dire",$valor,PDO::PARAM_INT);
        $stmt ->execute();
        return $stmt -> fetch(); 
    }

    static public function mdlguardarpuestos($tabla,$valor){
        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla(nom_puestos) VALUES(:dire); ");
        $valor1=ucwords(strtolower($valor));
        $stmt->bindParam(":dire", $valor1, PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{

            echo "error";
        }
    }

    static public function mdlEliminarpuestos($tabla1,$idpuestos1){


        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla1 WHERE id_puestos =:id");
        $stmt -> bindParam(":id", $idpuestos1, PDO::PARAM_INT);

        $sw1=$stmt -> execute();

       
        

        if($sw1){

			return "ok";
		
		}else{

			echo "\nPDO::errorInfo():\n";
    		print_r(Conexion::conectar()->errorInfo());

		}

        

	

        

    }

    static public function mdlVerpuestos($tabla , $item ,$valor ){

        $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item=:IDE");


        $stmt->bindParam(":IDE", $valor, PDO::PARAM_INT);
    
 

        $stmt -> execute();

        return $stmt -> fetch();


    }   

    static public function mdlguardarpuestoseditados($tabla, $nompuestos , $idpuestos){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nom_puestos=:puestos_nom WHERE id_puestos =:id");


        $stmt->bindParam(":id", $idpuestos, PDO::PARAM_INT);
	    $stmt->bindParam(":puestos_nom", $nompuestos, PDO::PARAM_STR);


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
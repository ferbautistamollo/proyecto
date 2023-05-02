<?php

require_once "conexion.php";

class mdlroles extends conexion{

    static public function mdlmostrarroles($tabla){
        $stmt= conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function mdlmostrarrolesusuarios($valor){
        $stmt = conexion :: conectar()-> prepare("SELECT nom_rol FROM roles where id_roles = :ROL"); 
        $stmt -> bindParam(":ROL",$valor,PDO::PARAM_INT);
        $stmt ->execute();
        return $stmt -> fetch(); 
    }

    static public function mdlguardarroles($tabla,$valor){
        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla(nom_rol) VALUES(:ROL); ");
        $valor1=ucwords(strtolower($valor));
        $stmt->bindParam(":ROL", $valor1, PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{

            echo "error";
        }
    }

    static public function mdlEliminarRoles($tabla1,$idroles1){


        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla1 WHERE id_roles =:id");
        $stmt -> bindParam(":id", $idroles1, PDO::PARAM_INT);

        $sw1=$stmt -> execute();

       
        

        if($sw1){

			return "ok";
		
		}else{

			echo "\nPDO::errorInfo():\n";
    		print_r(Conexion::conectar()->errorInfo());

		}

        

	

        

    }

    static public function mdlVerRoles($tabla , $item ,$valor ){

        $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item=:IDE");


        $stmt->bindParam(":IDE", $valor, PDO::PARAM_INT);
    
 

        $stmt -> execute();

        return $stmt -> fetch();


    }   

    static public function mdlguardarroleseditados($tabla, $nomRol , $idrol){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nom_rol=:rol_nom WHERE id_roles =:id");


        $stmt->bindParam(":id", $idrol, PDO::PARAM_INT);
	    $stmt->bindParam(":rol_nom", $nomRol, PDO::PARAM_STR);


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
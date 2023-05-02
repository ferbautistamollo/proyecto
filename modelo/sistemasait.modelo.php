<?php

require_once "conexion.php";

class mdlsistemasait extends conexion{

    static public function mdlmostrarsistemasait($tabla){
        $stmt= conexion::conectar()->prepare("SELECT * FROM $tabla
        INNER JOIN roles ON $tabla.id_roles = roles.id_roles");
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function mdlmostrarsistemasaitDS($tabla,$id_rol){
        $stmt= conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_roles=:id1");
        $stmt -> bindParam(":id1", $id_rol, PDO::PARAM_INT);
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

 

    static public function mdlsistemasaitexistentes($tabla1,$tabla2,$id_usu,$id_sis){
        $stmt=conexion::conectar()->prepare("SELECT *
        FROM $tabla2 as t1
            WHERE NOT EXISTS (SELECT NULL FROM $tabla1 as t2 WHERE t2.id_sistemasait = t1.id_sistemasait and t2.id_usuarios=:id)
                            and t1.id_sistemasait=:id1
        ");

        $stmt -> bindParam(":id", $id_usu, PDO::PARAM_INT);
        $stmt -> bindParam(":id1", $id_sis, PDO::PARAM_INT);
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
    }

    static public function mdlnsistemasait(){
        $stmt= conexion::conectar()->prepare("SELECT COUNT(*) FROM sistemasait");
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function mdlguardarsistemasait($datos){
        $link=conexion::conectar();
        $stmt=$link -> prepare("INSERT INTO sistemasait(nom_sistemasait,url_sistemasait,id_roles) VALUES (:SISTEMA,:URLSIS,:ROL);");
        
        $valor1=ucwords(strtolower($datos["nom_sistemasait"]));
        $stmt->bindParam(":SISTEMA", $valor1, PDO::PARAM_STR);
        $valor=strtolower($datos["url_sistemasait"]);       
        $stmt->bindParam(":URLSIS",$valor, PDO::PARAM_STR);
        $stmt->bindParam(":ROL",$datos["id_roles"],PDO::PARAM_INT);

        if($stmt->execute()){

            $id=$link->lastInsertId();
            return $id;
        }else{
            echo "error";
        }
    }

    static public function mdlguardarsistemasaiteditado($datos){
        $stmt=conexion::conectar() -> prepare("UPDATE sistemasait SET nom_sistemasait=:SISTEMA , url_sistemasait=:URLSIS ,id_roles=:ROL WHERE id_sistemasait=:id;");
        
        
        $stmt->bindParam(":id", $datos["id_sistemasait"], PDO::PARAM_INT);

        $valor1=ucwords(strtolower($datos["nom_sistemasait"]));
        $stmt->bindParam(":SISTEMA", $valor1, PDO::PARAM_STR);

        $valor=strtolower($datos["url_sistemasait"]);

        $stmt->bindParam(":URLSIS",$valor, PDO::PARAM_STR);

        $stmt->bindParam(":ROL",$datos["id_roles"],PDO::PARAM_INT);
        if($stmt->execute()){
            return "ok";
        }else{
            echo "error";
        }
    }
    
    static public function mdlmostrarsistemasait2($valor){
        $stmt=conexion::conectar()-> prepare("SELECT nom_sistemasait FROM sistemasait WHERE id_sistemasait = :SISTEMA");
        $stmt -> bindParam(":SISTEMA",$valor,PDO::PARAM_INT);
        $stmt ->execute();
        return $stmt -> fetch(); 
    }

    static public function mdlEliminarSistemasait($tabla1,$tabla2,$idsistemasait1){


        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla1 WHERE id_sistemasait =:id");
        $stmt -> bindParam(":id", $idsistemasait1, PDO::PARAM_INT);

        $sw1=$stmt -> execute();
        
        
        $stmt1 = Conexion::conectar()->prepare("DELETE FROM $tabla2 WHERE id_sistemasait =:id");
        $stmt1 -> bindParam(":id", $idsistemasait1, PDO::PARAM_INT);


        $sw2=$stmt1 -> execute();

       

       

        if($sw1 and $sw2){

			return "ok";
		
		}else{

			echo "\nPDO::errorInfo():\n";
    		print_r(Conexion::conectar()->errorInfo());

		}

        

		$stmt -> close();
		$stmt = null;

        $stmt1 -> close();
		$stmt1 = null;

       

    }

    static public function mdlVerSistemasait($tabla , $item ,$valor ){

        $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item=:IDE");

        $stmt->bindParam(":IDE", $valor, PDO::PARAM_INT);

        $stmt -> execute();

        return $stmt -> fetch();


    }  
}

?>
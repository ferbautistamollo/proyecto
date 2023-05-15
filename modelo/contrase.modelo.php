<?php

require_once "conexion.php";

class mdlcontrase extends conexion{

    static public function  mdlmostrarcontrase($tabla){
        $stmt=conexion::conectar()->prepare("SELECT * FROM $tabla
        INNER JOIN usuarios ON $tabla.id_usuarios = usuarios.id_usuarios
        INNER JOIN sistemasait ON $tabla.id_sistemasait = sistemasait.id_sistemasait
        ");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function  mdlmostrarcontrase1($tabla,$item,$valor,$item1,$valor1){
        $stmt=conexion::conectar() -> prepare ("SELECT * FROM $tabla WHERE $item=:CONTRASE AND $item1=:CONTRASE1");
        $stmt->bindParam(":CONTRASE",$valor, PDO::PARAM_INT);
        $stmt->bindParam(":CONTRASE1",$valor1, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt -> fetch(); 
        
        $stmt->close();
        $stmt=null;
    }
   

    static public function  mdleditarcontrase1($idusu,$datos,$sistemasait,$tabla,$tabla1){
        $sw="!ok";
 

        foreach($sistemasait as $key => $value){

            $sistemasaitexisten = ctrsistemasait::ctrsistemasexistentes($idusu,$value["id_sistemasait"]);
            
            if(count($sistemasaitexisten)!=0){
                $stmt= conexion::conectar()->prepare("INSERT INTO $tabla(con_contrase,id_sistemasait,id_usuarios) 
                VALUES(:CON,:IDS,:IDU);");
                

            }else{
                
                $stmt= conexion::conectar()->prepare("UPDATE $tabla SET con_contrase=:CON WHERE id_sistemasait=:IDS AND id_usuarios =:IDU;"); 

            }
            
            $stmt->bindParam(":CON", $datos["$key"], PDO::PARAM_STR);
            $stmt->bindParam(":IDS",$value["id_sistemasait"],PDO::PARAM_INT);

            $stmt->bindParam(":IDU",$idusu,PDO::PARAM_INT);
            

            

            if($stmt->execute()){
                $sw="ok";
            }            

        }

    
       
        if($sw =="ok"){
            return "ok";
        }else{

            echo "error";
        }
        $stmt->close();
        $stmt = null;

    }


    static public function mdlguardarcontrase($idusu,$sistemasait,$tabla,$tabla1){
        $sw="!ok";     

        foreach($sistemasait as $key => $value){
            $stmt= conexion::conectar()->prepare("INSERT INTO $tabla(con_contrase,id_sistemasait,id_usuarios) 
            VALUES(:CON,:IDS,:IDU);"); 
            $valor22="";
            $stmt->bindParam(":CON", $valor22, PDO::PARAM_STR);
            $stmt->bindParam(":IDS",$value["id_sistemasait"],PDO::PARAM_INT);          
            
            $stmt->bindParam(":IDU",$idusu,PDO::PARAM_INT);
                       
            if($stmt->execute()){
                $sw="ok";
            }             

        }
     
        if($sw =="ok"){

            return "ok";
        }else{

            echo "error";
        }
        $stmt->close();
        $stmt = null;

    }
      
    static public function mdlguardarcontrase1($idsis,$usuarios,$tabla,$tabla1){
        $sw="!ok";     

        foreach($usuarios as $key => $value){
            $stmt= conexion::conectar()->prepare("INSERT INTO $tabla(con_contrase,id_sistemasait,id_usuarios) 
            VALUES(:CON,:IDS,:IDU);"); 
            $valor22="";
            $stmt->bindParam(":CON", $valor22, PDO::PARAM_STR);
            $stmt->bindParam(":IDS",$idsis,PDO::PARAM_INT);          
            
            $stmt->bindParam(":IDU",$value["id_usuarios"],PDO::PARAM_INT);
                       
            if($stmt->execute()){
                $sw="ok";
            }             

        }
     
        if($sw =="ok"){

            return "ok";
        }else{

            echo "error";
        }
        $stmt->close();
        $stmt = null;

    }

}
?>
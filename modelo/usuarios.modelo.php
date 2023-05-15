<?php

require_once "conexion.php";

class mdlusuarios extends conexion{

    static public function mdlmostrarusuarios1($tabla,$item,$valor){
        $stmt = conexion :: conectar()-> prepare("SELECT * FROM $tabla 
        INNER JOIN roles ON $tabla.id_roles = roles.id_roles
        where $item = :APELLIDO");       
        $stmt -> bindParam(":APELLIDO",$valor,PDO::PARAM_STR);
        $stmt ->execute();
        return $stmt -> fetch(); 
        $stmt->close();
        $stmt=null; 
    }

    static public function mdlmostrarusuarios5($tabla,$item,$valor){
        $stmt = conexion :: conectar()-> prepare("SELECT * FROM $tabla where $item = :ID AND est1_usuarios=1");       
        $stmt -> bindParam(":ID",$valor,PDO::PARAM_STR);
        $stmt ->execute();
        return $stmt -> fetchAll(); 
        $stmt->close();
        $stmt=null; 
    }

    static public function mdlvalidarusuario($valorInput){
        $stmt = conexion :: conectar()-> prepare("SELECT * FROM usuarios WHERE usu_usuarios = '$valorInput'");       
        $stmt ->execute();

        if ($stmt->rowCount() > 0) {  
            return 1;
            
          } else {
            return "no_existe";
          }
        $stmt->close();
        $stmt=null; 
    }

    static public function mdlmostrarusuarios2($valor){
        $stmt = conexion :: conectar()-> prepare("SELECT usu_usuarios FROM usuarios where id_usuarios = :USUARIO");         
        $stmt -> bindParam(":USUARIO",$valor,PDO::PARAM_INT);
        $stmt ->execute();
        return $stmt -> fetch();       
    }

   
    static public function mdlmostrarusuarios($tabla){
        $stmt= conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_usuarios!=999999 AND est1_usuarios=1 ");
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    

    static public function mdlmostrarusuariosf($tabla,$tabla1){
        $stmt= conexion::conectar()->prepare("SELECT usu_usuarios
        FROM usuarios
        INNER JOIN contrase ON usuarios.id_usuarios = contrase.id_usuarios
        WHERE contrase.con_contrase = '' AND est1_usuarios=1
        GROUP BY usuarios.id_usuarios
        HAVING COUNT(contrase.id_usuarios) > 0
        ");
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function mdlmostrarusuariostotal($tabla){
        $stmt= conexion::conectar()->prepare("SELECT *
        FROM $tabla
        INNER JOIN roles ON $tabla.id_roles = roles.id_roles
        INNER JOIN direcciones ON $tabla.id_direcciones = direcciones.id_direcciones
        INNER JOIN unidades ON $tabla.id_unidades = unidades.id_unidades        
        INNER JOIN areas ON $tabla.id_areas = areas.id_areas 
        INNER JOIN cargos ON $tabla.id_cargos = cargos.id_cargos
        INNER JOIN puestos ON $tabla.id_puestos = puestos.id_puestos 
        
        WHERE $tabla.id_usuarios!=999999 AND est1_usuarios=1");

        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function mdlmostrarusuariosf1($tabla,$tabla1){
        $stmt= conexion::conectar()->prepare("SELECT usu_usuarios
        FROM usuarios
        INNER JOIN contrase ON usuarios.id_usuarios = contrase.id_usuarios
        INNER JOIN roles ON usuarios.id_roles = roles.id_roles
        INNER JOIN sistemasait ON contrase.id_sistemasait = sistemasait.id_sistemasait
        
        WHERE contrase.con_contrase = '' AND roles.nom_rol = 'Usuario' AND sistemasait.id_roles=2 AND est1_usuarios=1
        GROUP BY usuarios.id_usuarios
        HAVING COUNT(contrase.id_contrase) > 0
        ");

;

        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function mdlmostrarusuariosf2($tabla,$tabla1){
        $stmt= conexion::conectar()->prepare("SELECT usu_usuarios
        FROM usuarios
        INNER JOIN contrase ON usuarios.id_usuarios = contrase.id_usuarios
        INNER JOIN roles ON usuarios.id_roles = roles.id_roles
        INNER JOIN sistemasait ON contrase.id_sistemasait = sistemasait.id_sistemasait       
        WHERE contrase.con_contrase = '' AND roles.nom_rol = 'Usuario' AND sistemasait.id_roles=3 AND est1_usuarios=1
        GROUP BY usuarios.id_usuarios
        HAVING COUNT(contrase.id_contrase) > 0
        ");
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function mdlmostrarusuariosU($tabla,$valor){
        $stmt= conexion::conectar()->prepare("SELECT *
        FROM $tabla
        INNER JOIN roles ON usuarios.id_roles = roles.id_roles
        WHERE roles.nom_rol = :USUARIO AND usuarios.est1_usuarios=1 ");

        $stmt -> bindParam(":USUARIO",$valor,PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function mdlmostrarusuarios9($tabla){
        $stmt= conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_usuarios!=999999 AND est1_usuarios=0");
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function mdlmostrarusuariosmail1($tabla){
        $stmt= conexion::conectar()->prepare("SELECT * FROM $tabla WHERE este_usuarios=1");
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function mdlmostrarusuariosmail($tabla){
        $stmt= conexion::conectar()->prepare("SELECT * FROM $tabla WHERE estr_usuarios=1");
        $stmt -> execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
    }

    static public function mdlguardarusuarios1($tabla,$datos){
        $link=conexion::conectar();
        $stmt= $link->prepare("INSERT INTO $tabla(ap_usuarios,nom_usuarios,usu_usuarios,ci_usuarios,
        correo_usuarios,cont_usuarios,este_usuarios,estr_usuarios,est1_usuarios,id_roles,id_direcciones,
        id_unidades,id_areas,id_cargos,id_puestos,fecha_inc,fecha_nac,item_usuarios) 
        VALUES(:APELLIDOS,:NOMBRES,:USUARIO,:CI,:CORREO,:CONTRASE,0,0,1,:ROL,:DIR,:UNI,:ARE,:CAR,:PUE,:INC,:NAC,:ITE);");
        
        $valor1=ucwords(strtolower($datos["ap_usuarios"]));
        $stmt->bindParam(":APELLIDOS", $valor1, PDO::PARAM_STR);
        $valor2=ucwords(strtolower($datos["nom_usuarios"]));
        $stmt->bindParam(":NOMBRES",$valor2,PDO::PARAM_STR);
        $valor3=strtolower($datos["usu_usuarios"]);
        $stmt->bindParam(":USUARIO",$valor3,PDO::PARAM_STR);


        $carnet=$datos["ci_usuarios"]." ".$datos["ex_usuarios"];
        $stmt->bindParam(":CI",$carnet,PDO::PARAM_STR);
        $valor4=strtolower($datos["correo_usuarios"]);
        $stmt->bindParam(":CORREO",$valor4,PDO::PARAM_STR);

        $password = $datos["contrase_usuarios"];
        // Generar el hash de la contraseña
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $stmt->bindParam(":CONTRASE",$hashedPassword,PDO::PARAM_STR); 
         
        $stmt->bindParam(":ROL",$datos["id_roles"],PDO::PARAM_INT);

        $stmt->bindParam(":DIR",$datos["id_direcciones"],PDO::PARAM_INT);
        $stmt->bindParam(":UNI",$datos["id_unidades"],PDO::PARAM_INT);
        $stmt->bindParam(":ARE",$datos["id_areas"],PDO::PARAM_INT);
        $stmt->bindParam(":CAR",$datos["id_cargos"],PDO::PARAM_INT);
        $stmt->bindParam(":PUE",$datos["id_puestos"],PDO::PARAM_INT);
        $stmt->bindParam(":INC",$datos["fecha_inc"],PDO::PARAM_STR);
        $stmt->bindParam(":NAC",$datos["fecha_nac"],PDO::PARAM_STR);
        $stmt->bindParam(":ITE",$datos["item_usuarios"],PDO::PARAM_INT);

        
        if($stmt->execute()){

            $id=$link->lastInsertId();
            return $id;
        }else{

            return "error";
        }
        $stmt->close();
		$stmt = null;
    }

    static public function mdlguardarusuarioseditados1($tabla,$id,$datos){
        
        $stmt= conexion::conectar()->prepare("UPDATE $tabla SET ap_usuarios=:APELLIDOS,nom_usuarios=:NOMBRES,usu_usuarios=:USUARIO,
        ci_usuarios=:CI,correo_usuarios=:CORREO,cont_usuarios=:CONTRASE,id_roles=:ROL,id_direcciones=:DIR,
        id_unidades=:UNI,id_areas=:ARE,id_cargos=:CAR,id_puestos=:PUE,fecha_inc=:INC,fecha_nac=:NAC,item_usuarios=:ITE 
         WHERE $id=:IDE");

        $valor1=ucwords(strtolower($datos["ap_usuarios"]));
        $stmt->bindParam(":APELLIDOS", $valor1, PDO::PARAM_STR);
        $valor2=ucwords(strtolower($datos["nom_usuarios"]));
        $stmt->bindParam(":NOMBRES",$valor2,PDO::PARAM_STR);
        $valor3=strtolower($datos["usu_usuarios"]);
        $stmt->bindParam(":USUARIO",$valor3,PDO::PARAM_STR);

        $carnet=$datos["ci_usuarios"]." ".$datos["ex_usuarios"];
        $stmt->bindParam(":CI",$carnet,PDO::PARAM_STR);
        $valor4=strtolower($datos["correo_usuarios"]);
        $stmt->bindParam(":CORREO",$valor4,PDO::PARAM_STR);

        $stmt->bindParam(":IDE",$datos["id_usuarios"],PDO::PARAM_INT);

        $password = $datos["contrase_usuarios"];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $stmt->bindParam(":CONTRASE",$hashedPassword,PDO::PARAM_STR); 
        
        $stmt->bindParam(":ROL",$datos["id_roles"],PDO::PARAM_INT);

        $stmt->bindParam(":DIR",$datos["id_direcciones"],PDO::PARAM_INT);
        $stmt->bindParam(":UNI",$datos["id_unidades"],PDO::PARAM_INT);
        $stmt->bindParam(":ARE",$datos["id_areas"],PDO::PARAM_INT);
        $stmt->bindParam(":CAR",$datos["id_cargos"],PDO::PARAM_INT);
        $stmt->bindParam(":PUE",$datos["id_puestos"],PDO::PARAM_INT);
        $stmt->bindParam(":INC",$datos["fecha_inc"],PDO::PARAM_STR);
        $stmt->bindParam(":NAC",$datos["fecha_nac"],PDO::PARAM_STR);
        $stmt->bindParam(":ITE",$datos["item_usuarios"],PDO::PARAM_INT);

        if($stmt->execute()){
            return "ok";
        }else{

            echo "error";
        }
        $stmt->close();
		$stmt = null;
    }

    static public function mdlEliminarUsuarios($tabla1,$tabla2 , $id){


        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla1 WHERE id_usuarios =:id");
        $stmt -> bindParam(":id", $id, PDO::PARAM_INT);

        $sw1=$stmt -> execute();
                
        $stmt1 = Conexion::conectar()->prepare("DELETE FROM $tabla2 WHERE id_usuarios =:id");
        $stmt1 -> bindParam(":id", $id, PDO::PARAM_INT);

        $sw2=$stmt1 -> execute();

       
        if($sw1 && $sw2){
            
			return true;
		
		}else{

			echo "\nPDO::errorInfo():\n";
    		print_r(Conexion::conectar()->errorInfo());

		}

		$stmt -> close();
		$stmt = null;

        $stmt1 -> close();
		$stmt1 = null;

       

    }

    static public function mdlEliminarUsuarios1($tabla2 , $id){
                
        $stmt1 = Conexion::conectar()->prepare("UPDATE $tabla2 SET est1_usuarios=0  WHERE id_usuarios =:id");
        $stmt1 -> bindParam(":id", $id, PDO::PARAM_INT);

        $sw2=$stmt1 -> execute();
      
        if($sw2){
            
			return true;
		
		}else{

			echo "\nPDO::errorInfo():\n";
    		print_r(Conexion::conectar()->errorInfo());

		}

        $stmt1 -> close();
		$stmt1 = null;       

    }

    static public function mdlEliminarUsuarios2($tabla2 , $id){
                
        $stmt1 = Conexion::conectar()->prepare("UPDATE $tabla2 SET est1_usuarios=1  WHERE id_usuarios =:id");
        $stmt1 -> bindParam(":id", $id, PDO::PARAM_INT);

        $sw2=$stmt1 -> execute();
      
        if($sw2){
            
			return true;
		
		}else{

			echo "\nPDO::errorInfo():\n";
    		print_r(Conexion::conectar()->errorInfo());

		}

        $stmt1 -> close();
		$stmt1 = null;       

    }

    static public function mdlcheck1($tabla,$idsus1,$idval1){
        $stmt= conexion::conectar()->prepare("UPDATE $tabla SET este_usuarios=:ES WHERE id_usuarios=:IDE");
        
        $stmt->bindParam(":IDE", $idsus1, PDO::PARAM_INT);
        
        $stmt->bindParam(":ES",$idval1,PDO::PARAM_INT);
        

        if($stmt->execute()){
            return "ok";
        }else{

            echo "error";
        }
        $stmt->close();
		$stmt = null;
    }
      
    static public function mdlcheck($tabla,$idsus,$idval){
        $stmt= conexion::conectar()->prepare("UPDATE $tabla SET estr_usuarios=:ES WHERE id_usuarios=:IDE");
        
        $stmt->bindParam(":IDE", $idsus, PDO::PARAM_INT);
        
        $stmt->bindParam(":ES",$idval,PDO::PARAM_INT);
        

        if($stmt->execute()){
            return "ok";
        }else{

            echo "error";
        }
        $stmt->close();
		$stmt = null;
    }

     
   


}
?>
<?php

class conexion{
    static public function conectar(){

        try{
        $link = new PDO("pgsql:host='localhost'; dbname='sistema'", 'postgres' ,'123456');
                //echo "conexion en la base de datos"; 
      
        }catch (PDOException $exp){
                echo "Error con conexion en la base de datos";
        }

        return $link;

        
        
        
       




    }
}


?>
<?php
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';

    class ctrenviar{
       
       
        static public function ctrenviarcontrase1($sistemasait,$usuariosmail1,$usuariosmail){            
            
            if (isset($_POST["idusu1"])) {
                // Aquí colocas el código para enviar el correo electrónico
                

                $sw=0;
                $sw1=1;
                $cont=count($usuariosmail1);

                if($cont!=0){

                    foreach($usuariosmail1 as $env => $value1){
                        //$value1["correo_usuarios"]


                        if($sw1==1){

                            $mensaje0=$_POST["apellidou1"]." ".$_POST["nombreu1"];
                            $mensaje="<b>Usuario&emsp;    :&emsp;</b>".$_POST["usuariou1"]."";
                            $mensaje1="";
                                            
                            
                            foreach($sistemasait as $keys => $value){
            
                                $mensaje1=$mensaje1."<b>&emsp;".strtoupper($value["nom_sistemasait"])."</b><br>&emsp;
                                &emsp;<b>Dirección :&emsp;<a href=".$value["url_sistemasait"]." >".$value["url_sistemasait"]."</a>"."</b><br>&emsp;
                                &emsp;<b>Password :&emsp;</b>".$_POST[$value["id_sistemasait"]]."<br>";
                                
                            }
                        
                        
                            $mail = new PHPMailer\PHPMailer\PHPMailer();
                        
                            $mail->CharSet = 'UTF-8';
                            $mail->SMTPDebug = 0;                   
                            $mail->isSMTP();                                            
                            $mail->Host       = 'mail.ait.gob.bo';                    
                            $mail->SMTPAuth   =  true;                                   
                            //$mail->Username   = $_POST["correou1"]; 
                            $mail->Username   = "soporte@ait.gob.bo";                  
                            $mail->Password   = 'S1st3m4s';                               
                            $mail->SMTPSecure = 'tls';         
                            $mail->Port       = 25;  
            
                            $mail->setFrom($value1["correo_usuarios"], 'Remitente');            
                            $mail->addAddress($_POST["correou1"], 'Destinatario');     
                            $mail->isHTML(true);                                  
                            $mail->Subject = 'AGIT-SOPORTE-PASSWORD';
                            
                            $firma = "
                                
                                    <div>
                                        <p>Información de contacto:</p>
                                        <ul><li>Interno: 1706<br>
                                            Eddy Conde Mansillas<br>
                                            ANALISTA DE SOPORTE TECNICO Y SEGURIDAD<br>
                                            <b>AUTORIDAD GENERAL DE IMPUGNACIÓN TRIBUTARIA (AGIT)</b><br></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    <div>
                                        <ul>
                                        <li><b>LA PAZ</b> <br> 
                                            Av. Víctor Sanjinés N.º 2705.<br>
                                            Calle Méndez Arcos (Plaza España)<br>
                                            Teléfonos: 591 - (2) 2412789 – 2412048<br>
                                            <a href="."www.ait.gob.bo".">www.ait.gob.bo</a></li>
                                        </ul>
                                    </div>
            
                            
                            ";
            
                            // Contenido del correo electrónico
                            $contenido_correo = "
                                    <p><b>Bienvenido a la Autoridad de Impugnación Tributaria - AIT </b></p>
                                    <br>Se remite credenciales de acceso a los diferentes servicios y sistemas de la AIT:<br>
                                    <br><b>Para&emsp;&emsp;&emsp;:&emsp;</b>$mensaje0
                                    <br>$mensaje
                                    <br><b>Nota&emsp;&emsp;  :</b>&emsp;El Usuario proporcionado anteriormente es para todos los sitemas de la AiT</b>
                                    <p>$mensaje1<p>  
                            ";
            
                            // Concatenar la firma con el contenido del correo
                            $contenido_correo .= $firma;
                            $mail->msgHTML($contenido_correo);
                            $mail->send();

                            if($env == ($cont-1) ){$sw1=0;}
                        }
                        if(count($usuariosmail)!=0){
                        foreach($usuariosmail as $enve => $value2){
                            
                            
                            
                        //$value2["correo_usuarios"]
                            $mensaje0=$_POST["apellidou1"]." ".$_POST["nombreu1"];
                            $mensaje="<b>Usuario&emsp;    :&emsp;</b>".$_POST["usuariou1"]."";
                            $mensaje1="";
                                            
                            
                            foreach($sistemasait as $keys => $value){

                                $mensaje1=$mensaje1."<b>&emsp;".strtoupper($value["nom_sistemasait"])."</b><br>&emsp;
                                &emsp;<b>Dirección :&emsp;<a href=".$value["url_sistemasait"]." >".$value["url_sistemasait"]."</a>"."</b><br>&emsp;
                                &emsp;<b>Password :&emsp;</b>".$_POST[$value["id_sistemasait"]]."<br>";
                                
                            }
                        
                        
                            $mail = new PHPMailer\PHPMailer\PHPMailer();
                        
                            $mail->CharSet = 'UTF-8';
                            $mail->SMTPDebug = 0;                   
                            $mail->isSMTP();                                            
                            $mail->Host       = 'mail.ait.gob.bo';                    
                            $mail->SMTPAuth   =  true;                                   
                            //$mail->Username   = $_POST["correou1"]; 
                            $mail->Username   = "soporte@ait.gob.bo";                  
                            $mail->Password   = 'S1st3m4s';                               
                            $mail->SMTPSecure = 'tls';         
                            $mail->Port       = 25;  

                            $mail->setFrom($value1["correo_usuarios"], 'Remitente');            
                            $mail->addAddress($value2["correo_usuarios"], 'Destinatario');     
                            $mail->isHTML(true);                                  
                            $mail->Subject = 'AGIT-SOPORTE-PASSWORD';
                            
                            $firma = "
                                
                                    <div>
                                        <p>Información de contacto:</p>
                                        <ul><li>Interno: 1706<br>
                                            Eddy Conde Mansillas<br>
                                            ANALISTA DE SOPORTE TECNICO Y SEGURIDAD<br>
                                            <b>AUTORIDAD GENERAL DE IMPUGNACIÓN TRIBUTARIA (AGIT)</b><br></li>
                                            
                                            
                                        </ul>
                                    </div>
                                    <div>
                                        <ul>
                                        <li><b>LA PAZ</b> <br> 
                                            Av. Víctor Sanjinés N.º 2705.<br>
                                            Calle Méndez Arcos (Plaza España)<br>
                                            Teléfonos: 591 - (2) 2412789 – 2412048<br>
                                            <a href="."www.ait.gob.bo".">www.ait.gob.bo</a></li>
                                        </ul>
                                    </div>

                            
                            ";

                            // Contenido del correo electrónico
                            $contenido_correo = "
                                    <p><b>Bienvenido a la Autoridad de Impugnación Tributaria - AIT </b></p>
                                    <br>Se remite credenciales de acceso a los diferentes servicios y sistemas de la AIT:<br>
                                    <br><b>Para&emsp;&emsp;&emsp;:&emsp;</b>$mensaje0
                                    <br>$mensaje
                                    <br><b>Nota&emsp;&emsp;  :</b>&emsp;El Usuario proporcionado anteriormente es para todos los sitemas de la AiT</b>
                                    <p>$mensaje1<p>  
                            ";

                            // Concatenar la firma con el contenido del correo
                            $contenido_correo .= $firma;
                            $mail->msgHTML($contenido_correo);
                            if($mail->send()){
                                $sw=$sw+1;
                            }

                        }
                        }
                    }
                }
                if($sw1==0 && $sw == 0){
                    echo'<script>  
                    swal({
                            type:"success",
                            title: "¡ENVIADO!",
                            text: "ENVIO CON EXITO",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                                                
                    }).then(function(result){
    
                            if(result.value){   
                                history.back();
                            } 
                    });
    
                </script>';
                }else{
                    if($sw==($env+1)*($enve+1)){
                        echo'<script>  
                            swal({
                                    type:"success",
                                    title: "¡ENVIADO!",
                                    text: "ENVIO CON EXITO",
                                    showConfirmButton: true,
                                    confirmButtonText: "Cerrar"
                                                        
                            }).then(function(result){
            
                                    if(result.value){   
                                        history.back();
                                    } 
                            });
            
                            </script>';
                    }else{
                        echo "<div class='alert alert-danger mt-3 small'>Registro Fallido</div>";
                    }
                }
            }
                
           
            
            
        }



        

    }


    
?>
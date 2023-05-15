<?php

  session_start();
  
  $usuarios9= ctrusuarios::ctrmostrarusuarios9();
  
  $roles= ctrroles::ctrmostrarroles();
  $contrase=ctrcontrase::ctrmostrarcontrase();
  $usuariosmail1= ctrusuarios::ctrmostrarusuariosmail1();
  $usuariosmail= ctrusuarios::ctrmostrarusuariosmail();

  $direcciones= ctrdirecciones::ctrmostrardirecciones();
  $unidades= ctrunidades::ctrmostrarunidades();
  $areas= ctrareas::ctrmostrarareas();
  $cargos= ctrcargos::ctrmostrarcargos();
  $puestos= ctrpuestos::ctrmostrarpuestos();

  
  if(isset($_SESSION["idbackend"])){
    $admin=ctrusuarios::ctrmostrarusuarios1("id_usuarios",$_SESSION["idbackend"]);
    
    if($admin["nom_rol"]=="Administrador"){
      $sistemasait= ctrsistemasait::ctrmostrarsistemasait();
      $usuarios= ctrusuarios::ctrmostrarusuarios();
      $usuariosfaltantes=ctrusuarios::ctrmostrarusuariosf();
      $usuariostotal=ctrusuarios::ctrmostrarusuariostotal();
      $dat=array();
      foreach ($usuariosfaltantes as $fila ) {                    
        array_push($dat,$fila["usu_usuarios"]);               
      }
    }elseif($admin["nom_rol"]=="Usuario"){
      $sistemasait= ctrsistemasait::ctrmostrarsistemasait();
      $usuarios= ctrusuarios::ctrmostrarusuarios5($admin["id_usuarios"]);
      $usuariosfaltantes=ctrusuarios::ctrmostrarusuariosf1();     
      
    }else{
      $sistemasait= ctrsistemasait::ctrmostrarsistemasaitDS($admin["id_roles"]);
      $usuarios= ctrusuarios::ctrmostrarusuariosU('Usuario');
      if($admin["nom_rol"]=="Soporte"){
        $usuariosfaltantes=ctrusuarios::ctrmostrarusuariosf2();
        
      }else{
        $usuariosfaltantes=ctrusuarios::ctrmostrarusuariosf1();
      }     
    }

    if ((!isset($_SESSION['modal_mostrado']) || $_SESSION['modal_mostrado'] !== true )&& $admin["nom_rol"]!="Usuario") {
      // Mostramos el modal
      echo '
          
      
          <script src="vistas/js/modal.js"></script>
          <script>
            $(document).ready(function() {
              $("#myModal").modal("show");
            });
          </script>
        ';
      } 
    $_SESSION['modal_mostrado'] = true;
  

  }


// Verificas si la variable de sesión "modal_mostrado" está definida y es verdadera





?>

<!DOCTYPE html>
<html>
<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SGC AIT</title>
    <link rel="icon" href="vistas/imagenes/usuarios/llave.png" type="image/png">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=">
    <link rel="stylesheet" href="vistas/recursos/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vistas/recursos/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vistas/recursos/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="vistas/recursos/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="vistas/recursos/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">   
    <link rel="stylesheet" href="vistas/recursos/dist/css/skins/_all-skins.min.css">
    <script src="vistas/js/sweetalert2.all.js"></script>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<?php

if(!isset($_SESSION["validarsesion"])):

include "paginas/login.php";

?>

<?php

else:
?>

<body class="hold-transition skin-green-light sidebar-mini">

  <div class="wrapper">

    <?php include "modulos/header.php"; ?>
      
    <?php include "modulos/menu.php"; ?>
    
    <div class="content-wrapper" style="min-height: 717px;">

      <?php

      if(isset($_GET["pagina"])){

        if($_GET["pagina"]=="usuarios" ||
          $_GET["pagina"]=="roles" ||
          $_GET["pagina"]=="sistemasait" ||
          $_GET["pagina"]=="contrase"||
          $_GET["pagina"]=="enviar"||
          $_GET["pagina"]=="eliminar"||
          $_GET["pagina"]=="direcciones"||
          $_GET["pagina"]=="unidades"||          
          $_GET["pagina"]=="areas"||          
          $_GET["pagina"]=="cargos"||          
          $_GET["pagina"]=="puestos"||          
          $_GET["pagina"]=="envios"||          
          $_GET["pagina"]=="salir"
          ){
        
          include "paginas/".$_GET["pagina"].".php";
        }
      }

      ?>

    </div>

 <?php include "modulos/footer.php"; ?> 
  
</div>

    <script src="vistas/recursos/bower_components/jquery/dist/jquery.min.js"></script>
    
    <script src="vistas/recursos/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vistas/recursos/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="vistas/recursos/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="vistas/recursos/dist/js/adminlte.min.js"></script>
    <script src="vistas/recursos/dist/js/demo.js"></script>
    <script src="vistas/recursos/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vistas/recursos/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script src="vistas/js/usuarios.js"></script>
    <script src="vistas/js/roles.js"></script>
    <script src="vistas/js/contrase.js"></script>
    <script src="vistas/js/sistemasait.js"></script>
    <script src="vistas/js/enviar.js"></script>
    <script src="vistas/js/direcciones.js"></script>
    <script src="vistas/js/unidades.js"></script>
    <script src="vistas/js/areas.js"></script>
    <script src="vistas/js/cargos.js"></script>
    <script src="vistas/js/puestos.js"></script>
    <script src="vistas/js/envios.js"></script>
    
    
    <script>
    $(document).ready(function() {
        $('.sidebar-menu').tree()
    })
    </script>

   

  
</body>

<?php 
endif ?>




</html>




<div class="modal modal-default fade" id="myModal" >
    <div class="modal-dialog">
        <div class="modal-content">
           
            <div class="modal-body" style="max-height: 80%; overflow-y: auto;"> 
            
                <div class="modal-header">
                    <div class="alert alert-info">
                      <div style="font-size: 28px;"><h1>Bienvenido <?php echo $admin['nom_usuarios']." ".$admin['ap_usuarios']?></h1></div>
                      <div class="" style="font-size: 28px; margin-top:-15px;"></div>                   
                    </div>                     
                 
                                     
                    <table class="table table-bordered table-striped dt-responsive " widt="100% " >
                        <thead style="background-color: #2596be; color: #fff; ">
                            <tr>
                                <th style="width:18%">Total: <?php echo count($usuariosfaltantes)?></th>
                                <th>Usuarios sin contraseñas </th>
                                

                            </tr>
                        </thead>              
                        <tbody>
                        
                                <?php
                                    foreach($usuariosfaltantes as $key => $value){                               
                                ?>     
                                    <tr>                       
                                            <td><?php echo ($key+1) ?></td>

                                            <td> <?php echo $value["usu_usuarios"] ?></td>
                                                               
                                    </tr>                                      
                                <?php                         
                                
                                }   
                            ?>
                        </tbody>
                    </table>
                </div> 
                
           
            </div>

            <div class="modal-footer"> 
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                                       
                </div>
        </div>
    </div>
</div>
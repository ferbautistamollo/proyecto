<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="vistas/imagenes/usuarios/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $admin["nom_usuarios"]." ".$admin["ap_usuarios"]?></p>
          <a href="#"><i class="fa fa-circle text-success"></i><?php echo $admin["nom_rol"]?></a>
        </div>
      </div>
      <!-- search form -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU DE NAVEGACION</li>

        <li class="active treeview">

          <a href="#">
         
            <i class="fa fa-dashboard"></i> <span>Passwords</span>
            
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            
          </a>

          <ul class="treeview-menu">
                           
            <li ><a href="envios"><i class="fas fa-users"></i>Registro y Envio
            <?php if(count($usuariosfaltantes)>0 && $admin["nom_rol"]!='Usuario' ){ ?>
              <span class="label label-danger pull-right"><?php echo count($usuariosfaltantes); ?></span>
            <?php } ?>
            </a></li> 


            <?php
                  if($admin["nom_rol"]==='Administrador'){              
                  ?>    
            <li ><a href="enviar"><i class="far fa-envelope"></i>Emi/Rec de Envios</a></li>
            <?php
                  }            
                  ?>
          </ul>
        </li>

     
              <?php
                  if($admin["nom_rol"]==='Administrador'){              
                  ?>
                    
          <li class="active treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Gestionar SGC</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>

                <ul class="treeview-menu">

                  <li ><a href="usuarios"><i class="fas fa-users"></i>Gestionar Usuarios</a></li>
                  <li ><a href="sistemasait"><i class="fas fa-sitemap"></i>Gestionar Sistemas AIT</a></li>                                                             
                  <li ><a href="roles"><i class="fas fa-user-tag"></i>Gestionar Roles</a></li>
                  <li ><a href="cargos"><i class="fas fa-user-tag"></i>Gestionar Cargos</a></li>
                  <li ><a href="puestos"><i class="fas fa-user-tag"></i>Gestionar Puestos</a></li>
                  <li ><a href="direcciones"><i class="fas fa-address-book"></i>Gestionar Organigramas</a></li>
                  <li ><a href="unidades"><i class="fas fa-address-book"></i>Gestionar Unidades</a></li>
                  <li ><a href="areas"><i class="fas fa-address-book"></i>Gestionar Areas</a></li>  
                  <li ><a href="eliminar"><i class="fas fa-trash"></i>Eliminados</a></li>              
                  <li ><a href="contrase"><i class="fas fa-key"></i>Contraseñas</a></li>        
                  
                </ul>
          </li>

            <?php
              }
            ?> 
        
        
        
        </ul>
    </section>
    
  </aside>
<header class="main-header">
    <!-- Logo -->
    <a href="envios" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SGC</b> AGIT</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>    

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <?php if($admin["nom_rol"]!='Usuario' ){?>
          <li class="dropdown messages-menu">

              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                  <?php if(count($usuariosfaltantes)>0){?>
                    <span class="label label-danger"><?php echo count($usuariosfaltantes); ?></span>
                  <?php }?>
                   
              </a>
              
            <ul class="dropdown-menu">

              <li class="header"><?php echo count($usuariosfaltantes); ?> usuario/s sin contraseñas 
              </li>

              <li>                 
                <ul class="menu">
                     
                  <?php foreach($usuariosfaltantes as $key => $value){?>                                                                                       
                    <li>                      
                        <a href="#">
                          <i class="fa fa-user text-red"></i> <?php echo $value["usu_usuarios"]?>
                        </a>
                    </li>
                  <?php }?>
                </ul>
              </li>

            </ul>
          </li>   
          <?php } ?>
          <!-- User Account: style can be found in dropdown.less -->
          
          <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="vistas/imagenes/usuarios/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $admin["nom_usuarios"]." ".$admin["ap_usuarios"] ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="vistas/imagenes/usuarios/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $admin["nom_usuarios"]." ".$admin["ap_usuarios"] ?>
                    <small><?php echo date('Y-m-d ') ?></small>
                  </p>
                  
                </li>
                <!-- Menu Body -->
                
                <!-- Menu Footer-->
                <li class="user-footer">
                  
                  <div class="pull-right">
                    <a href="salir" class="btn btn-default btn-flat">Salir</a>
                  </div>
                </li>
              </ul>
            </li>
          <!-- Control Sidebar Toggle Button -->
          
         
        
        </ul>
      </div>
    </nav>
  </header>
<section class="content-header">

    <div class="container-flui">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Gestionar Usuarios</h1>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info card-outline">
                    <?php if($admin["nom_rol"]=="Administrador"){
                    
                    ?>

                    <div class="card-header botonlimpiar limpiarregistro" >
                        <button type="button" class="btn btn-success crear-usuarios" 
                        data-toggle="modal" 
                        data-target="#modal-crear-usuarios">Registrar Nuevo Usuario
                        </button>
                        
                    </div><br>
                    <?php
                    
                    }
                    
                    ?>

                </div>
                <div class="nav-tabs-custom">

                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Todos</a></li>
                        <li><a href="#tab_2" data-toggle="tab">DGE</a></li>
                        <li><a href="#tab_3" data-toggle="tab">R-LA PAZ</a></li>
                        <li><a href="#tab_4" data-toggle="tab">R-SANTA CRUZ</a></li>
                        <li><a href="#tab_5" data-toggle="tab">R-COCHABAMBA</a></li>
                        <li><a href="#tab_6" data-toggle="tab">R-CHUQUISACA</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <table class="table table-bordered table-striped dt-responsive tablausuarios" widt="100%">
                                <thead>
                                    <tr>
                                        
                                        <th style="width:10px">#</th>                                       
                                        <th>Apellidos y Nombres</th>                                        
                                        <th>Usuario</th>
                                        <th>C.I.</th>
                                        <th>Rol</th> 

                                        <th>Organigrama</th>
                                        <th>Unidad</th>
                                        <th>Area</th>
                                        <th>Cargo</th>

                                        <th>Puesto</th>                                    
                                        <th>Item</th>
                                        <th>F. Incor</th>
                                        <th>F. Nac</th>  

                                        <th>Acciones</th>
                                    </tr>
                                </thead>                             
                                <tbody>                               
                                <?php
                                    foreach($usuariostotal as $key => $value){
                                                                                        
                                ?>
                                <tr>                                                       
                                    
                                    <td><?php echo ($key+1) ?></td>
                                    <td><?php echo $value["ap_usuarios"]." ".$value["nom_usuarios"]?></td>                                                                      
                                    <td><?php echo $value["usu_usuarios"] ?></td>
                                    <td><?php echo $value["ci_usuarios"] ?></td> 
                                    <td><?php echo $value["nom_rol"] ?></td> 
                                    <td> <?php echo $value["nom_direcciones"]?> </td>
                                    <td> <?php echo $value["nom_unidades"]?> </td>
                                    <td> <?php echo $value["nom_areas"]?> </td>
                                    <td> <?php echo $value["nom_cargos"]?> </td>

                                    <td> <?php echo $value["nom_puestos"]?> </td>
                                    <td> <?php echo $value["item_usuarios"]?> </td>
                                    <td> <?php echo $value["fecha_inc"]?> </td>
                                    <td> <?php echo $value["fecha_nac"]?> </td>                                 
                                
                                    <td><button class="btn btn-warning btn-sm btneditar-usuarios"
                                            data-target="#modal-editar-usuarios"
                                            data-toggle="modal"
                                            idUsuarios3="<?php echo $value["id_usuarios"]?>">
                                            <i class="fas fa-pencil-alt  text-white"></i>
                                        </button>  

                                        <?php if($admin["nom_rol"]=="Administrador"){ ?>
                                        
                                    
                                        <button class="btn btn-danger btn-sm btneliminarusuarios1" 
                                            data-toggle="modal"
                                            idusuarios21="<?php echo $value["id_usuarios"]?>">                                               
                                            <i class="fas fa-trash-alt"></i>
                                            
                                        </button> 
                                        <?php } ?>
                                        
                                    </td>
                                    
                                </tr>
                                <?php 
                                
                                }
                                
                                ?>

                                </tbody>
                            </table>
                        
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <table class="table table-bordered table-striped dt-responsive tablausuarios" widt="100%">
                                <thead>
                                    <tr>
                                        
                                        <th style="width:10px">#</th>                                       
                                        <th>Apellidos y Nombres</th>                                        
                                        <th>Usuario</th>
                                        <th>C.I.</th>
                                        <th>Rol</th> 

                                        <th>Organigrama</th>
                                        <th>Unidad</th>
                                        <th>Area</th>
                                        <th>Cargo</th>

                                        <th>Puesto</th>                                    
                                        <th>Item</th>
                                        <th>F. Incor</th>
                                        <th>F. Nac</th>  

                                        <th>Acciones</th>
                                    </tr>
                                </thead>                             
                                <tbody>                               
                                <?php
                                    $cont=0;
                                    foreach($usuariostotal as $key => $value){
                                    if($value["nom_direcciones"]==="Dirección Ejecutiva General") {  
                                        $cont=$cont+1;
                                ?>
                                        <tr>                                                       
                                            
                                            
                                            <td><?php echo ($cont) ?></td>
                                            <td><?php echo $value["ap_usuarios"]." ".$value["nom_usuarios"]?></td>                                                                      
                                            <td><?php echo $value["usu_usuarios"] ?></td>
                                            <td><?php echo $value["ci_usuarios"] ?></td> 
                                            <td><?php echo $value["nom_rol"] ?></td> 
                                            <td> <?php echo $value["nom_direcciones"]?> </td>
                                            <td> <?php echo $value["nom_unidades"]?> </td>
                                            <td> <?php echo $value["nom_areas"]?> </td>
                                            <td> <?php echo $value["nom_cargos"]?> </td>

                                            <td> <?php echo $value["nom_puestos"]?> </td>
                                            <td> <?php echo $value["item_usuarios"]?> </td>
                                            <td> <?php echo $value["fecha_inc"]?> </td>
                                            <td> <?php echo $value["fecha_nac"]?> </td>                                 
                                        
                                            <td><button class="btn btn-warning btn-sm btneditar-usuarios"
                                                    data-target="#modal-editar-usuarios"
                                                    data-toggle="modal"
                                                    idUsuarios3="<?php echo $value["id_usuarios"]?>">
                                                    <i class="fas fa-pencil-alt  text-white"></i>
                                                </button>  

                                                <?php if($admin["nom_rol"]=="Administrador"){ ?>
                                                
                                            
                                                <button class="btn btn-danger btn-sm btneliminarusuarios1" 
                                                    data-toggle="modal"
                                                    idusuarios21="<?php echo $value["id_usuarios"]?>">                                               
                                                    <i class="fas fa-trash-alt"></i>
                                                    
                                                </button> 
                                                <?php } ?>
                                                
                                            </td>
                                            
                                        </tr>
                                <?php 
                                    }
                                }
                                
                                ?>

                                </tbody>
                            </table>
                                               
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">
                            <table class="table table-bordered table-striped dt-responsive tablausuarios" widt="100%">
                                <thead>
                                    <tr>
                                        
                                        <th style="width:10px">#</th>                                       
                                        <th>Apellidos y Nombres</th>                                        
                                        <th>Usuario</th>
                                        <th>C.I.</th>
                                        <th>Rol</th> 

                                        <th>Organigrama</th>
                                        <th>Unidad</th>
                                        <th>Area</th>
                                        <th>Cargo</th>

                                        <th>Puesto</th>                                    
                                        <th>Item</th>
                                        <th>F. Incor</th>
                                        <th>F. Nac</th>  

                                        <th>Acciones</th>
                                    </tr>
                                </thead>                             
                                <tbody>                               
                                <?php
                                    $cont=0;
                                    foreach($usuariostotal as $key => $value){
                                    if($value["nom_direcciones"]==="Dirección Ejecutiva Regional La Paz") {  
                                        $cont=$cont+1;
                                ?>
                                        <tr>                                                       
                                            
                                            
                                            <td><?php echo ($cont) ?></td>
                                            <td><?php echo $value["ap_usuarios"]." ".$value["nom_usuarios"]?></td>                                                                      
                                            <td><?php echo $value["usu_usuarios"] ?></td>
                                            <td><?php echo $value["ci_usuarios"] ?></td> 
                                            <td><?php echo $value["nom_rol"] ?></td> 
                                            <td> <?php echo $value["nom_direcciones"]?> </td>
                                            <td> <?php echo $value["nom_unidades"]?> </td>
                                            <td> <?php echo $value["nom_areas"]?> </td>
                                            <td> <?php echo $value["nom_cargos"]?> </td>

                                            <td> <?php echo $value["nom_puestos"]?> </td>
                                            <td> <?php echo $value["item_usuarios"]?> </td>
                                            <td> <?php echo $value["fecha_inc"]?> </td>
                                            <td> <?php echo $value["fecha_nac"]?> </td>                                 
                                        
                                            <td><button class="btn btn-warning btn-sm btneditar-usuarios"
                                                    data-target="#modal-editar-usuarios"
                                                    data-toggle="modal"
                                                    idUsuarios3="<?php echo $value["id_usuarios"]?>">
                                                    <i class="fas fa-pencil-alt  text-white"></i>
                                                </button>  

                                                <?php if($admin["nom_rol"]=="Administrador"){ ?>
                                                
                                            
                                                <button class="btn btn-danger btn-sm btneliminarusuarios1" 
                                                    data-toggle="modal"
                                                    idusuarios21="<?php echo $value["id_usuarios"]?>">                                               
                                                    <i class="fas fa-trash-alt"></i>
                                                    
                                                </button> 
                                                <?php } ?>
                                                
                                            </td>
                                            
                                        </tr>
                                <?php 
                                    }
                                }
                                
                                ?>

                                </tbody>
                            </table>
                        
                        
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="tab_4">
                            <table class="table table-bordered table-striped dt-responsive tablausuarios" widt="100%">
                                <thead>
                                    <tr>
                                        
                                        <th style="width:10px">#</th>                                       
                                        <th>Apellidos y Nombres</th>                                        
                                        <th>Usuario</th>
                                        <th>C.I.</th>
                                        <th>Rol</th> 

                                        <th>Organigrama</th>
                                        <th>Unidad</th>
                                        <th>Area</th>
                                        <th>Cargo</th>

                                        <th>Puesto</th>                                    
                                        <th>Item</th>
                                        <th>F. Incor</th>
                                        <th>F. Nac</th>  

                                        <th>Acciones</th>
                                    </tr>
                                </thead>                             
                                <tbody>                               
                                <?php
                                    $cont=0;
                                    foreach($usuariostotal as $key => $value){
                                    if($value["nom_direcciones"]==="Dirección Ejecutiva Regional Santa Cruz") {  
                                        $cont=$cont+1;
                                ?>
                                        <tr>                                                       
                                            
                                            
                                            <td><?php echo ($cont) ?></td>
                                            <td><?php echo $value["ap_usuarios"]." ".$value["nom_usuarios"]?></td>                                                                      
                                            <td><?php echo $value["usu_usuarios"] ?></td>
                                            <td><?php echo $value["ci_usuarios"] ?></td> 
                                            <td><?php echo $value["nom_rol"] ?></td> 
                                            <td> <?php echo $value["nom_direcciones"]?> </td>
                                            <td> <?php echo $value["nom_unidades"]?> </td>
                                            <td> <?php echo $value["nom_areas"]?> </td>
                                            <td> <?php echo $value["nom_cargos"]?> </td>

                                            <td> <?php echo $value["nom_puestos"]?> </td>
                                            <td> <?php echo $value["item_usuarios"]?> </td>
                                            <td> <?php echo $value["fecha_inc"]?> </td>
                                            <td> <?php echo $value["fecha_nac"]?> </td>                                 
                                        
                                            <td><button class="btn btn-warning btn-sm btneditar-usuarios"
                                                    data-target="#modal-editar-usuarios"
                                                    data-toggle="modal"
                                                    idUsuarios3="<?php echo $value["id_usuarios"]?>">
                                                    <i class="fas fa-pencil-alt  text-white"></i>
                                                </button>  

                                                <?php if($admin["nom_rol"]=="Administrador"){ ?>
                                                
                                            
                                                <button class="btn btn-danger btn-sm btneliminarusuarios1" 
                                                    data-toggle="modal"
                                                    idusuarios21="<?php echo $value["id_usuarios"]?>">                                               
                                                    <i class="fas fa-trash-alt"></i>
                                                    
                                                </button> 
                                                <?php } ?>
                                                
                                            </td>
                                            
                                        </tr>
                                <?php 
                                    }
                                }
                                
                                ?>

                                </tbody>
                            </table>
                        
                        
                        </div>

                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="tab_5">
                            <table class="table table-bordered table-striped dt-responsive tablausuarios" widt="100%">
                                <thead>
                                    <tr>
                                        
                                        <th style="width:10px">#</th>                                       
                                        <th>Apellidos y Nombres</th>                                        
                                        <th>Usuario</th>
                                        <th>C.I.</th>
                                        <th>Rol</th> 

                                        <th>Organigrama</th>
                                        <th>Unidad</th>
                                        <th>Area</th>
                                        <th>Cargo</th>

                                        <th>Puesto</th>                                    
                                        <th>Item</th>
                                        <th>F. Incor</th>
                                        <th>F. Nac</th>  

                                        <th>Acciones</th>
                                    </tr>
                                </thead>                             
                                <tbody>                               
                                <?php
                                    $cont=0;
                                    foreach($usuariostotal as $key => $value){
                                    if($value["nom_direcciones"]==="Dirección Ejecutiva Regional Cochabamba") {  
                                        $cont=$cont+1;
                                ?>
                                        <tr>                                                       
                                            
                                            
                                            <td><?php echo ($cont) ?></td>
                                            <td><?php echo $value["ap_usuarios"]." ".$value["nom_usuarios"]?></td>                                                                      
                                            <td><?php echo $value["usu_usuarios"] ?></td>
                                            <td><?php echo $value["ci_usuarios"] ?></td> 
                                            <td><?php echo $value["nom_rol"] ?></td> 
                                            <td> <?php echo $value["nom_direcciones"]?> </td>
                                            <td> <?php echo $value["nom_unidades"]?> </td>
                                            <td> <?php echo $value["nom_areas"]?> </td>
                                            <td> <?php echo $value["nom_cargos"]?> </td>

                                            <td> <?php echo $value["nom_puestos"]?> </td>
                                            <td> <?php echo $value["item_usuarios"]?> </td>
                                            <td> <?php echo $value["fecha_inc"]?> </td>
                                            <td> <?php echo $value["fecha_nac"]?> </td>                                 
                                        
                                            <td><button class="btn btn-warning btn-sm btneditar-usuarios"
                                                    data-target="#modal-editar-usuarios"
                                                    data-toggle="modal"
                                                    idUsuarios3="<?php echo $value["id_usuarios"]?>">
                                                    <i class="fas fa-pencil-alt  text-white"></i>
                                                </button>  

                                                <?php if($admin["nom_rol"]=="Administrador"){ ?>
                                                
                                            
                                                <button class="btn btn-danger btn-sm btneliminarusuarios1" 
                                                    data-toggle="modal"
                                                    idusuarios21="<?php echo $value["id_usuarios"]?>">                                               
                                                    <i class="fas fa-trash-alt"></i>
                                                    
                                                </button> 
                                                <?php } ?>
                                                
                                            </td>
                                            
                                        </tr>
                                <?php 
                                    }
                                }
                                
                                ?>

                                </tbody>
                            </table>
                        
                        
                        </div>

                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="tab_6">
                            <table class="table table-bordered table-striped dt-responsive tablausuarios" widt="100%">
                                <thead>
                                    <tr>
                                        
                                        <th style="width:10px">#</th>                                       
                                        <th>Apellidos y Nombres</th>                                        
                                        <th>Usuario</th>
                                        <th>C.I.</th>
                                        <th>Rol</th> 

                                        <th>Organigrama</th>
                                        <th>Unidad</th>
                                        <th>Area</th>
                                        <th>Cargo</th>

                                        <th>Puesto</th>                                    
                                        <th>Item</th>
                                        <th>F. Incor</th>
                                        <th>F. Nac</th>  

                                        <th>Acciones</th>
                                    </tr>
                                </thead>                             
                                <tbody>                               
                                <?php
                                    $cont=0;
                                    foreach($usuariostotal as $key => $value){
                                    if($value["nom_direcciones"]==="Dirección Ejecutiva Regional Chuquisaca") {  
                                        $cont=$cont+1;
                                ?>
                                        <tr>                                                       
                                            
                                            
                                            <td><?php echo ($cont) ?></td>
                                            <td><?php echo $value["ap_usuarios"]." ".$value["nom_usuarios"]?></td>                                                                      
                                            <td><?php echo $value["usu_usuarios"] ?></td>
                                            <td><?php echo $value["ci_usuarios"] ?></td> 
                                            <td><?php echo $value["nom_rol"] ?></td> 
                                            <td> <?php echo $value["nom_direcciones"]?> </td>
                                            <td> <?php echo $value["nom_unidades"]?> </td>
                                            <td> <?php echo $value["nom_areas"]?> </td>
                                            <td> <?php echo $value["nom_cargos"]?> </td>

                                            <td> <?php echo $value["nom_puestos"]?> </td>
                                            <td> <?php echo $value["item_usuarios"]?> </td>
                                            <td> <?php echo $value["fecha_inc"]?> </td>
                                            <td> <?php echo $value["fecha_nac"]?> </td>                                 
                                        
                                            <td><button class="btn btn-warning btn-sm btneditar-usuarios"
                                                    data-target="#modal-editar-usuarios"
                                                    data-toggle="modal"
                                                    idUsuarios3="<?php echo $value["id_usuarios"]?>">
                                                    <i class="fas fa-pencil-alt  text-white"></i>
                                                </button>  

                                                <?php if($admin["nom_rol"]=="Administrador"){ ?>
                                                
                                            
                                                <button class="btn btn-danger btn-sm btneliminarusuarios1" 
                                                    data-toggle="modal"
                                                    idusuarios21="<?php echo $value["id_usuarios"]?>">                                               
                                                    <i class="fas fa-trash-alt"></i>
                                                    
                                                </button> 
                                                <?php } ?>
                                                
                                            </td>
                                            
                                        </tr>
                                <?php 
                                    }
                                }
                                
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                    </div>

            </div>

        </div>

    </div>
    


</section>




<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<div class="modal modal-default fade" id="modal-editar-usuarios">
    <div class="modal-dialog">     
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="alert alert-success alert-dismissible ">Editar Usuario</h4>
            </div>
            <div class="modal-body" >
            <form method="post"  >
                <input type="hidden" id="idusu3" name="id_usuarios"> 
                <h4><b>Datos Personales</b></h4>
               
                <div class="form-group has-feedback" bis_skin_checked="1" style="display: flex; ">
                    <input style="width: 35%; margin-right: 2px; padding-right:2px;" type="text" id="apellidou3" class="form-control" name="ap_usuarios" placeholder="Apellidos" oninput="validarUsuario()" required>                                         
                    <input style="width: 35% ; margin-right: 2px; padding-right:2px;" type="text" id="nombreu3" class="form-control" name="nom_usuarios" placeholder="Nombres" oninput="validarUsuario()" required>              
                    <input  style="width: 20%; margin-right: 2px; padding-right:2px;" type="text" id="ci3" class="form-control" name="ci_usuarios" placeholder="Nro Carnet" oninput="validarUsuario()" required>  
                    <select style="width: 10%; padding-right:0px;" id="ex_usuarios1" class="form-control" name="ex_usuarios" required  >                         
                        <option value="Lp">LP</option>
                        <option value="Sc">SC</option> 
                        <option value="Cb">CB</option> 
                        <option value="Pt">PT</option>   
                        <option value="Ch">CH</option> 
                        <option value="Bn">BN</option> 
                        <option value="Pa">PA</option>
                        <option value="Or">OR</option> 
                        <option value="Tj">TJ</option> 
                    </select>                 
                </div>

                <h4><b>Disponibilidad de Usuario (Autollenado/Editable)</b></h4>
                
                <div class="form-group has-feedback" bis_skin_checked="1" style="display: flex; ">
                    <input style="width: 50%; margin-right: 2px; padding-right:2px;" type="text" id="correo3" class="form-control" name="correo_usuarios" placeholder="Correo">            
                    <input style="width: 25%; margin-right: 2px; padding-right:2px;" type="text" id="usuariou3" class="form-control" name="usu_usuarios" placeholder="Usuario" oninput="validarUsuario1()">      
                    <?php if($admin["nom_rol"]=="Administrador"){ ?>                                       
                    <input style="width: 25%; padding-right:2px;" type="password" id="contrase3" class="form-control" name="contrase_usuarios" placeholder="Contraseña">
                    <?php } ?>
                </div>

                <h4><b>Otros Datos</b></h4>
                <div class="form-group has-feedback" style="display: flex; ">

                    <div style="width: 33%; margin-right: 3px;">
                    <h6>Rol</h6>
                    <select id="rol3" class="form-control" name="rol_user" required style=" padding-right:0px;">  
                    
                        <?php
                            foreach($roles as $key => $value){
                            ?>                          
                                <option value=<?php echo $value["id_roles"] ?>><?php echo $value["nom_rol"] ?></option>                                                                                                         
                            <?php                                                 
                            }   
                        ?>
                    </select>
                    </div>
                    
                    <div style="width: 34%; margin-right: 3px;">

                    <h6>Cargo</h6>
                    
                    <select id="cargos3" class="form-control" name="cargos_user" required style=" padding-right:0px;"> 
                     
                        <?php
                            foreach($cargos as $key => $value){
                            ?>                          
                                <option value=<?php echo $value["id_cargos"] ?>><?php echo $value["nom_cargos"] ?></option>                                                                                                         
                            <?php                                                 
                            }   
                        ?>
                    </select>
                    </div>

                    <div style="width: 33%; ">
                    
                        <h6>Puesto</h6>
                        <select id="puestos3" class="form-control" name="puestos_user" required style=" padding-right:0px;"> 
                        
                            <?php
                                foreach($puestos as $key => $value){
                                ?>                          
                                    <option value=<?php echo $value["id_puestos"] ?>><?php echo $value["nom_puestos"] ?></option>                                                                                                         
                                <?php                                                 
                                }   
                            ?>
                        </select>
                    </div>

                </div>

                <div class="form-group has-feedback" style="display: flex; ">
                   
                    <div style="width: 33%; margin-right: 3px;">
                    
                    <h6>Organigrama</h6>
                    <select id="direcciones3" class="form-control" name="direcciones_user" required style=" padding-right:0px;"> 
                     
                        <?php
                            foreach($direcciones as $key => $value){
                            ?>                          
                                <option value=<?php echo $value["id_direcciones"] ?>><?php echo $value["nom_direcciones"] ?></option>                                                                                                         
                            <?php                                                 
                            }   
                        ?>
                    </select>
                </div>

                    <div style="width: 34%; margin-right: 3px;">
                    
                    <h6>Unidad</h6>
                    <select id="unidades3" class="form-control" name="unidades_user" required style=" padding-right:0px;"> 
                     
                        <?php
                            foreach($unidades as $key => $value){
                            ?>                          
                                <option value=<?php echo $value["id_unidades"] ?>><?php echo $value["nom_unidades"] ?></option>                                                                                                         
                            <?php                                                 
                            }   
                        ?>
                    </select>
                    </div>

                    <div style="width: 33%; ">
                    <h6>Area</h6>
                    <select id="areas3" class="form-control" name="areas_user" required style=" padding-right:0px;">  
                    
                        <?php
                            foreach($areas as $key => $value){
                            ?>                          
                                <option value=<?php echo $value["id_areas"] ?>><?php echo $value["nom_areas"] ?></option>                                                                                                         
                            <?php                                                 
                            }   
                        ?>
                    </select>
                    </div>

                </div>

                
                <div class="form-group has-feedback" style="display: flex; ">
                   
                    <div style="width: 20%; margin-right: 3px;">                        
                        <h6>Item</h6>                        
                        <input style=" padding-right:0px;" type="text" id="item3" class="form-control" name="item_usuarios" placeholder="#" required>

                    </div>
                    
                    <div style="width: 40%; margin-right: 3px;">                    
                        <h6>Fecha Nacimiento</h6>
                        <input style=" padding-right:0px;" type="date" id="fecha_nac3" class="form-control" name="fecha_nac" placeholder="#" required>
                    </div>

                    <div style="width: 40%;">  
                        <h6>Fecha Inc/Tras</h6>                  
                      
                        <input style=" padding-right:0px;" type="date" id="fecha_inc3" name="fecha_inc"  class="form-control" required>
                        
                    </div>

                 
               </div>
                    <?php                          
                        foreach($sistemasait as $key => $value){                                                                                                                
                            ?>                                                                                       
                                <input type="hidden" class="form-control" name="<?php echo $value["id_sistemasait"]?>" ?>                                                                       
                            <?php                                                   
                        }   
                    ?>       
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" >Guardar</button>
                </div>

                <?php 
                    $guardarusuarioseditados = new ctrusuarios();
                    $guardarusuarioseditados->ctrguardarusuarioseditados1();                       
                ?>
            </form>
            </div>
        </div>
    </div>                         
</div>




<div class="modal modal-default fade" id="modal-crear-usuarios">
    <div class="modal-dialog">     
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="alert alert-success alert-dismissible ">Agregar nuevo usuario</h4>
            </div>
            <div class="modal-body" >
            <form method="post"  >
                <h4><b>Datos Personales</b></h4>
               
                <div class="form-group has-feedback" bis_skin_checked="1" style="display: flex; ">
                    <input style="width: 35%; margin-right: 2px; padding-right:2px;" type="text" id="inputt1" class="form-control" name="ap_usuarios1" placeholder="Apellidos" oninput="validarUsuario()" required>                                         
                    <input style="width: 35%; margin-right: 2px; padding-right:2px;" type="text" id="inputt2" class="form-control" name="nom_usuarios" placeholder="Nombres" oninput="validarUsuario()" required>              
                    <input  style="width: 20%; margin-right: 2px; padding-right:2px;" type="text" id="inputt5" class="form-control" name="ci_usuarios" placeholder="Nro Carnet" oninput="validarUsuario()" required>                   
                    <select style="width: 10%; padding-right:0px;" id="inputt16" class="form-control" name="ex_usuarios" required  >                         
                        <option value="Lp">LP</option>
                        <option value="Sc">SC</option> 
                        <option value="Cb">CB</option> 
                        <option value="Pt">PT</option>   
                        <option value="Ch">CH</option> 
                        <option value="Bn">BN</option> 
                        <option value="Pa">PA</option>
                        <option value="Or">OR</option> 
                        <option value="Tj">TJ</option> 
                    </select>
                
                </div>

                <h4><b>Disponibilidad de Usuario (Autollenado/Editable)</b></h4>
                
                <div class="form-group has-feedback" bis_skin_checked="1" style="display: flex; ">
                    <input style="width: 50%; margin-right: 2px; padding-right:2px;" type="text" id="inputt4" class="form-control" name="correo_usuarios" placeholder="Correo">            
                    <input style="width: 25%; margin-right: 2px; padding-right:2px;" type="text" id="inputt3" class="form-control" name="usu_usuarios" placeholder="Usuario" oninput="validarUsuario1()">      
                    <input style="width: 25%; padding-right:2px;" type="password" id="inputt6" class="form-control" name="contrase_usuarios" placeholder="Contraseña">
                    
                </div>

                <h4><b>Otros Datos</b></h4>
                <div class="form-group has-feedback" style="display: flex; ">

                    <div style="width: 33%; margin-right: 3px;">
                    <h6>Rol</h6>
                    <select id="inputt7" class="form-control" name="rol_user" required  style=" padding-right:2px;">  
                    
                        <?php
                            foreach($roles as $key => $value){
                            ?>                          
                                <option value=<?php echo $value["id_roles"] ?>><?php echo $value["nom_rol"] ?></option>                                                                                                         
                            <?php                                                 
                            }   
                        ?>
                    </select>
                    </div>
                    
                    <div style="width: 34%; margin-right: 3px;">

                    <h6>Cargo</h6>
                    
                    <select id="inputt11" class="form-control" name="cargos_user" required style=" padding-right:2px;"> 
                     
                        <?php
                            foreach($cargos as $key => $value){
                            ?>                          
                                <option value=<?php echo $value["id_cargos"] ?>><?php echo $value["nom_cargos"] ?></option>                                                                                                         
                            <?php                                                 
                            }   
                        ?>
                    </select>
                    </div>

                    <div style="width: 33%; ">
                    
                        <h6>Puesto</h6>
                        <select id="inputt12" class="form-control" name="puestos_user" required style=" padding-right:2px;"> 
                        
                            <?php
                                foreach($puestos as $key => $value){
                                ?>                          
                                    <option value=<?php echo $value["id_puestos"] ?>><?php echo $value["nom_puestos"] ?></option>                                                                                                         
                                <?php                                                 
                                }   
                            ?>
                        </select>
                    </div>

                </div>

                <div class="form-group has-feedback" style="display: flex; ">
                   
                    <div style="width: 33%; margin-right: 3px;">
                    
                    <h6>Organigrama</h6>
                    <select id="inputt8" class="form-control" name="direcciones_user" required style=" padding-right:2px;"> 
                     
                        <?php
                            foreach($direcciones as $key => $value){
                            ?>                          
                                <option value=<?php echo $value["id_direcciones"] ?>><?php echo $value["nom_direcciones"] ?></option>                                                                                                         
                            <?php                                                 
                            }   
                        ?>
                    </select>
                </div>

                    <div style="width: 34%; margin-right: 3px;">
                    
                    <h6>Unidad</h6>
                    <select id="inputt9" class="form-control" name="unidades_user" required style=" padding-right:2px;"> 
                     
                        <?php
                            foreach($unidades as $key => $value){
                            ?>                          
                                <option value=<?php echo $value["id_unidades"] ?>><?php echo $value["nom_unidades"] ?></option>                                                                                                         
                            <?php                                                 
                            }   
                        ?>
                    </select>
                    </div>

                    <div style="width: 33%; ">
                    <h6>Area</h6>
                    <select id="inputt10" class="form-control" name="areas_user" required style=" padding-right:2px;">  
                    
                        <?php
                            foreach($areas as $key => $value){
                            ?>                          
                                <option value=<?php echo $value["id_areas"] ?>><?php echo $value["nom_areas"] ?></option>                                                                                                         
                            <?php                                                 
                            }   
                        ?>
                    </select>
                    </div>

                </div>

                
                <div class="form-group has-feedback" style="display: flex; ">
                   
                    <div style="width: 20%; margin-right: 3px;">                        
                        <h6>Item</h6>                        
                        <input style=" padding-right:2px;" type="text" id="inputt13" class="form-control" name="item_usuarios" placeholder="#" required>

                    </div>
                    
                    <div style="width: 40%; margin-right: 3px;">                    
                        <h6>Fecha Nacimiento</h6>
                        <input style=" padding-right:2px;" type="date" id="inputt14" class="form-control" name="fecha_nac" placeholder="#" required>
                    </div>

                    <div style="width: 40%;">  
                        <h6>Fecha Inc/Tras</h6>                  
                      
                        <input style=" padding-right:2px;" type="date" id="inputt15" name="fecha_inc"  class="form-control" required>
                        
                    </div>

                 
               </div>
                    <?php                          
                        foreach($sistemasait as $key => $value){                                                                                                                
                            ?>                                                                                       
                                <input type="hidden" class="form-control" name="<?php echo $value["id_sistemasait"]?>" ?>                                                                       
                            <?php                                                   
                        }   
                    ?>       
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                    <button class="btn btn-info" id="limpiar">Limpiar</button>
                    <button type="submit" class="btn btn-primary" id="mensaje-validacion" disabled>Guardar</button>
                    

                </div>

                <?php 
                    $guardarusuarios = new ctrusuarios();
                    $respues=$guardarusuarios->ctrguardarusuarios1();
                    if(count($sistemasait)!=0){
                        $guardarcontrase = new ctrcontrase();
                        $guardarcontrase -> ctrguardarcontrase($sistemasait,$respues);
                    }
                                         
                ?>
            </form>
            </div>
        </div>
    </div>                         
</div>


<section class="content-header">

    <div class="container-flui">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Registro y Envios de Passwords </h1>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info card-outline">
                    <div class="card-body">
                        <table class="table table-bordered table-striped dt-responsive enviosusuarios" widt="100%">
                            <thead>
                                <tr>
                                    
                                    <th style="width:15px">#</th>                                       
                                    <th>Apellidos y Nombres</th>                                        
                                    <th>Usuario</th>
                                    <th>C.I.</th>                                                                         
                                    <th>Acciones</th>
                                </tr>
                            </thead>                             
                            <tbody>                               
                            <?php
                                foreach($usuarios as $key => $value){
                                                                                      
                            ?>
                            <tr>                                                       
                                
                                <td><?php echo ($key+1) ?></td>
                                <td><?php echo $value["ap_usuarios"]." ".$value["nom_usuarios"]?></td>                                                                      
                                <td><?php echo $value["usu_usuarios"] ?></td>
                                <td><?php echo $value["ci_usuarios"] ?></td>                                   
                               
                                <td> 
                                    <?php if($admin["nom_rol"]!="Usuario"){ ?>                                  
                                    <button type="button" 
                                        class="btn btn-success btn-sm btneditar-contrase"
                                        data-toggle="modal"
                                        idContrasee="<?php echo $value["id_usuarios"]?>"
                                        <?php 
                                            if(count($sistemasait)!=0){                                                                                                                                  
                                                foreach($sistemasait as $key11 =>$value11){
                                                    echo ('idnsistemasaitt'.$key11.'="'.$value11["id_sistemasait"].'"'); 
                                                }  
                                            }                                      
                                        ?> 
                                        idnrosiss="<?php                                                
                                                        if(count($sistemasait)!=0){
                                                        
                                                            echo $key11;
                                                        }else{
                                                            echo 0;
                                                        }                                           
                                                    ?>" 
                                        data-target="#modal-editar-contrase"
                                        > +<i class="fas fa-user-lock"></i>Pass  
                                        <i class="fas fa-file-signature"></i>
                                    </button>

                                    <?php } ?>


                                    <?php if($admin["nom_rol"]=="Administrador"){?>
                    
                                      <button <?php  if(in_array($value["usu_usuarios"], $dat)){echo "disabled";} ?> class="btn btn-info btn-sm fa-1x btnenviar-contrase" 
                                            data-toggle="modal"
                                            idContrase="<?php echo $value["id_usuarios"]?>"
                                            
                                            <?php 
                                                if(count($sistemasait)!=0){  
                                                    foreach($sistemasait as $key11 =>$value11){
                                                        echo ('idnsistemasait'.$key11.'="'.$value11["id_sistemasait"].'"'); 
                                                    }
                                                }
                                            ?> 

                                            idnrosis="<?php 
                                            if(count($sistemasait)!=0){
                                            echo $key11;
                                            }else{echo 0;}?>" 

                                            data-target="#modal-enviar-contrase">
                                            <i class="fa fa-envelope-o" aria-hidden="true"><b></b></i>
                                        </button>

                                    <?php }?>
                               </td>
                                
                            </tr>
                            <?php 
                            
                            }
                            
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


<div class="modal modal-default fade" id="modal-editar-contrase">
    <div class="modal-dialog">
        <div class="modal-content">
           
            <div class="modal-body"> 
            <form method="post" enctype="multipart/form-data" class="formusuarios" > 
                <div class="modal-header">
                    <div class="alert alert-info">
                    <div  id="idusu05" style="font-size: 28px;"></div>
                    <div  id="idusu051" class="" style="font-size: 28px; margin-top:-15px;  "></div>                   
                </div>                     
                <input type="hidden" id="idusu5" class="form-control" name="idusu5" readonly onmousedown="return true;">
                <input type="hidden" id="apellidou5" class="form-control" name="apellidou5" readonly onmousedown="return false;">
                <input type="hidden" id="nombreu5" class="form-control" name="nombreu5" readonly onmousedown="return false;">
                <input type="hidden" id="usuariou5" class="form-control" name="usuariou5" readonly onmousedown="return false;"> 
                                     
                    <table class="table table-bordered table-striped dt-responsive " widt="100% " >
                        <thead style="background-color: #2596be; color: #fff; ">
                            <tr>
                                <th style="width:10px">#</th>
                                <th>Sistema</th>
                                <th>Dirección url</th>
                                <th>Contraseña</th>

                            </tr>
                        </thead>              
                        <tbody>
                        
                                <?php
                                    foreach($sistemasait as $key => $value){                               
                                ?>     
                                    <tr>                       
                                            <td><?php echo ($key+1) ?></td>

                                            <td> <?php echo $value["nom_sistemasait"] ?></td>
                                            <td> <?php echo $value["url_sistemasait"] ?></td>
                                            <td>
                                                <div class="form-group has-feedback" bis_skin_checked="1">
                                                    <input type="password"  class="form-control" name="<?php echo $value["id_sistemasait"]?>" ?
                                                    id="idsiss<?php echo $value["id_sistemasait"]?>" required placeholder="Ingresar contraseña" minlength="8">
                                                    
                                                
                                                </div>
                                            </td>                   
                                    </tr>                                      
                                <?php                         
                                
                                }   
                            ?>
                        </tbody>
                    </table>
                </div> 
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" >Guardar</button>                   
                </div>

                <?php     
                    if(count($sistemasait)!=0){       
                        $editarcontrase1 = new ctrcontrase();                       
                        $editarcontrase1 -> ctreditarcontrase1($sistemasait);
                    }
                ?>
            </form>
            </div>
        </div>
    </div>
</div>




<div class="modal modal-default fade" id="modal-enviar-contrase">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body"> 
                <form method="post" enctype="multipart/form-data" class="formusuarios" > 
                                                                                                                        
                    <input type="hidden" id="idusu1" class="form-control" name="idusu1" readonly onmousedown="return true;">
                    <input type="hidden" id="apellidou1" class="form-control" name="apellidou1" readonly onmousedown="return false;">
                    <input type="hidden" id="nombreu1" class="form-control" name="nombreu1" readonly onmousedown="return false;">
                    <input type="hidden" id="usuariou1" class="form-control" name="usuariou1" readonly onmousedown="return false;">
                    <input type="hidden" id="correou1" class="form-control" name="correou1" readonly onmousedown="return false;">                                                                                                
                        <?php                                                    
                            foreach($sistemasait as $key => $value){                              
                            ?>                                                                                                                                                             
                                <input  type="hidden" class="form-control" name="<?php echo $value["id_sistemasait"]?>" ?
                                id="idsis<?php echo $value["id_sistemasait"]?>" readonly onmousedown="return false;" placeholder="Sin contraseña">                                                                                                                                                  
                            <?php                                                    
                                }   
                        ?>
                    
                    <table class="table table-bordered table-striped dt-responsive " widt="100% " >
                        <thead style="background-color: #2596be; color: #fff; ">
                            <tr>
                                <th style="width:10px">#</th>
                                <th>De: </th>
                                
                            </tr>
                        </thead>              
                        <tbody>                                                                 
                            <?php                               
                                foreach($usuariosmail1 as $key => $value){                                   
                            ?>     
                                <tr>  
                                    <td><?php echo ($key+1) ?></td>
                                    <td> <?php echo $value["correo_usuarios"] ?></td>                                       
                                    
                                </tr>                                       
                            <?php                         
                                    
                                }   
                            ?>                      
                        </tbody>
                    </table>

                    <table class="table table-bordered table-striped dt-responsive " widt="100% " >
                        <thead style="background-color: #2596be; color: #fff; ">
                            <tr>
                                <th style="width:10px">#</th>
                                <th>Para: </th>                          
                            </tr>
                        </thead>              
                        <tbody>                      
                                <tr>
                                    <td >1</td>
                                    <td id="idusu091"></td> 
                                </tr>
                                <?php                               
                                    foreach($usuariosmail as $key => $value){                                    
                                ?>     
                                    <tr>  
                                        <td><?php echo ($key+2) ?></td>
                                        <td> <?php echo $value["correo_usuarios"] ?></td>                                                                      
                                    </tr>                                                                   
                                <?php                                                        
                                    }   
                                ?>
                        </tbody>
                    </table>

                    <div class="modal-footer"> 
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                        
                        <button type="submit" class="btn btn-primary" >Enviar</button>
                    </div>

                    <?php            
                        $enviarcontrase1 = new ctrenviar();
                        $enviarcontrase1 -> ctrenviarcontrase1($sistemasait,$usuariosmail1,$usuariosmail);
                    ?>
                    
                </form>
            </div>
        </div>        
    </div>
</div>



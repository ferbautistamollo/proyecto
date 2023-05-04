<section class="content-header">

    <div class="container-flui">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Usuarios Eliminados</h1>
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
                        <table class="table table-bordered table-striped dt-responsive tablausuarios" widt="100%">
                            <thead>
                                <tr>
                                    <th style="width:55px">Eliminar</th>
                                    <th style="width:10px">#</th>                                       
                                    <th>Apellidos y Nombres</th>                                        
                                    <th>Usuario</th>                                                                         
                                    <th>Rol</th>                                                                           
                                </tr>
                            </thead>                             
                            <tbody>                               
                            <?php
                                foreach($usuarios9 as $key => $value){
                                $mroles=ctrroles::ctrmostrarrolesusuarios($value["id_roles"]);
                                                        
                            ?>
                            <tr>                                                       
                                <td>  
                                    <button class="btn btn-danger btn-sm btneliminarusuarios" 
                                        data-toggle="modal"
                                        idusuarios2="<?php echo $value["id_usuarios"]?>">                                               
                                        <i class="fas fa-trash-alt"></i>
                                    </button>    
                                    
                                    <button class="btn btn-success btn-sm btneliminarusuarios2" 
                                        data-toggle="modal"
                                        idusuarios22="<?php echo $value["id_usuarios"]?>">                                               
                                        <i class="fas fa-trash-restore"></i>
                                        
                                    </button>
                                </td>
                                <td><?php echo ($key+1) ?></td>
                                <td><?php echo $value["ap_usuarios"]." ".$value["nom_usuarios"]?></td>                                                                      
                                <td><?php echo $value["usu_usuarios"] ?></td>
                                                                  
                                <td> <?php echo $mroles["nom_rol"] ?> </td>
                                
                                
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



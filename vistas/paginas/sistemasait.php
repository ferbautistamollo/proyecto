<section class="content-header">

    <div class="container-flui">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Administrar Sistemas AIT</h1>
            </div>
        </div>
    </div>
    </section>

<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-info card-outline">
                <div class="card-header limpiarsistema" >
                    <button type="button" class="btn btn-success crear-sistemasait" data-toggle="modal" data-target="#modal-crear-sistemasait">
                        Registrar Sistemas AIT
                    </button><br>

                </div><br>

                <div class="card-body">
                    <table class="table table-bordered table-striped dt-responsive tablasistemasait" widt="100%">
                        <thead>
                            <tr>
                                <th style="width:10px">#</th>
                                <th>Sistema</th>
                                <th>Url</th>
                                <th>Designacion</th>
                                <th>Acciones</th>
                                

                            </tr>
                        </thead>
                        
                        <tbody>
                        
                        

                        <?php
                            foreach($sistemasait as $key => $value){
                            
                        ?>
                        <tr>                    
                            <td><?php echo ($key+1) ?></td>
                            <td><?php echo $value["nom_sistemasait"] ?></td>

                            
                            <td><a href="<?php echo "https://".$value["url_sistemasait"] ?>" target="_blank"><?php echo "https://".$value["url_sistemasait"] ?></a></td>
                            
                            <td><?php echo $value["nom_rol"] ?></td>
                            <td>

                            <div class='btn-group'>
                            
                                <button class="btn btn-warning btn-sm btneditarsistemasait" 
                                data-toggle="modal"
                                idsistemasait2="<?php echo $value["id_sistemasait"]?>"
                                data-target="#modal-editar-sistemasait"
                                >
                                
                                <i class="fas fa-pencil-alt text-white"></i>
                                </button>  

                                <button class="btn btn-danger btn-sm btneliminarsistemasait"
                                data-toggle="modal"
                                idsistemasait1="<?php echo $value["id_sistemasait"]?>">
                                <i class="fas fa-trash-alt"></i>
                                </button> 

                            </div> 

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

<div class="modal modal-default fade" id="modal-crear-sistemasait">
<div class="modal-dialog">
<div class="modal-content">

    <div class="modal-body"> 
        <div class="modal-header">
            <h4 class="alert alert-success alert-dismissible ">Agregar nuevo Sistema</h4>
        </div>

        <form method="post" enctype="multipart/form-data">

            <div class="form-group has-feedback" bis_skin_checked="1">
                <input type="text" id="limsis" class="form-control"  name="nom_sistemasait" placeholder="Nombre Sistema" >
                
            </div>

            
            <div class="form-group has-feedback" bis_skin_checked="1" style="display: flex; ">
                <div><span style="width: 20%;">https://</span></div>
                <input type="text" class="form-control" name="url_sistemasait" placeholder="Direccion Sistema" >
                
            </div>
                    
            <div class="form-group has-feedback">

                <label>Para</label>

                <select id="rol3sis" class="form-control" name="rol_usersis1" required>  
                    <?php
                        foreach($roles as $key => $value){
                            if($value["nom_rol"]!="Administrador" && $value["nom_rol"]!="Usuario"){
                        ?>                          
                            <option value=<?php echo $value["id_roles"] ?>><?php echo $value["nom_rol"] ?></option>                                                                                                         
                        <?php                                                 
                        } }  
                    ?>
                </select>

            </div>


            <div class="modal-footer"> 
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <?php 

                $guardarsistemasait = new ctrsistemasait();
                $ress=$guardarsistemasait -> ctrguardarsistemasait();
                
                if(count($usuarios)!=0){
                    $guardarcontrase1 = new ctrcontrase();
                    $guardarcontrase1 -> ctrguardarcontrase1($usuarios,$ress);
                }

            
            ?>


        </form>
    </div>

</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>


<div class="modal modal-default fade" id="modal-editar-sistemasait">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-body"> 
    <div class="modal-header">
        <h4 class="alert alert-success alert-dismissible ">Editar Sistema</h4>
    </div>
    <form method="post" enctype="multipart/form-data">

        <div class="form-group has-feedback" bis_skin_checked="1">
            <input type="hidden" name="id_sise">
            <input type="text" class="form-control" name="nom_sise">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        
        <div class="form-group has-feedback" bis_skin_checked="1" style="display: flex; ">
            <div><span style="width: 20%;">https://</span></div>
            <input type="text" class="form-control" name="url_sise" >
            <div><br><span style="width: 20%;">.ait.gob.bo</span></div>
        </div>

        <div class="form-group has-feedback">

                <label>Para</label>

                <select id="rol3e" class="form-control" name="rol_usersise" required>  
                    <?php
                        foreach($roles as $key => $value){
                            if($value["nom_rol"]!="Administrador" && $value["nom_rol"]!="Usuario"){
                        ?>                          
                            <option value=<?php echo $value["id_roles"] ?>><?php echo $value["nom_rol"] ?></option>                                                                                                         
                        <?php                                                 
                        }
                    }   
                    ?>
                </select>

        </div>
                      
        <div class="modal-footer"> 
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        <?php 

            $guardarsistemasaiteditado = new ctrsistemasait();
            $guardarsistemasaiteditado -> ctrguardarsistemasaiteditado();
        
            
        ?>


    </form>
</div>
</div>
</div>

</div>
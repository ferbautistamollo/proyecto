
<section class="content-header">

<div class="container-flui">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Administrar Roles</h1>
        </div>
    </div>
</div>

</section>

<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-info card-outline">
                <div class="card-header limpiarrol ">
                    <button type="button" class="btn btn-success crear-rol" data-toggle="modal" data-target="#modal-crear-rol" disabled>
                        Registrar Rol
                    </button><br>

                </div><br>

                <div class="card-body">
                    <table class="table table-bordered table-striped dt-responsive tablaroles" widt="100%">
                        <thead>
                            <tr>
                                <th style="width:10px">#</th>
                                <th>Roles</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        
                        <?php ?>

                        <?php
                            foreach($roles as $key => $value){

                        ?>
                        <tr>                    
                            <td><?php echo ($key+1) ?></td>
                            <td><?php echo $value["nom_rol"] ?></td>
                            
                            
                            <td>

                            <div class='btn-group'>
                            
                                <button disabled class="btn btn-warning btn-sm btneditarroles "
                                data-target="#modal-editar-rol"
                                data-toggle="modal"
                                idroles2="<?php echo $value["id_roles"]?>">
                                <i class="fas fa-pencil-alt text-white"></i>
                                </button>  

                                <button disabled class="btn btn-danger btn-sm btneliminarroles"
                                data-toggle="modal"
                                idroles1="<?php echo $value["id_roles"]?>">
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



<div class="modal modal-default fade" id="modal-crear-rol">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h4 class="alert alert-success alert-dismissible ">Agregar Rol</h4>
    </div>
    <form method="post" enctype="multipart/form-data">

        <div class="form-group has-feedback" bis_skin_checked="1">
            <input type="text" id="limrol" class="form-control" name="nom_rol" placeholder="Nuevo Rol">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="modal-footer"> 
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        <?php 

            $guardarroles = new ctrroles();
            $guardarroles -> ctrguardarroles();
            
            
        ?>

                       
    </form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<!-- /.EDITAR -->

<div class="modal modal-default fade" id="modal-editar-rol">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h4 class="alert alert-warning alert-dismissible ">Editar Rol</h4>
    </div>
    <form method="post" enctype="multipart/form-data">

        <div class="form-group has-feedback" bis_skin_checked="1">
            <input type="hidden" name="id_rolE">
            <input type="text" class="form-control" name="nom_rolE">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="modal-footer"> 
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        <?php 

            $guardarroleseditados = new ctrroles();
            $guardarroleseditados -> ctrguardarroleseditados();
            
            
        ?>

                       
    </form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
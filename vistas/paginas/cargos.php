
<section class="content-header">

<div class="container-flui">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Administrar cargos</h1>
        </div>
    </div>
</div>

</section>

<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-info card-outline">
                <div class="card-header limpiarcargos ">
                    <button type="button" class="btn btn-success crear-cargos" data-toggle="modal" data-target="#modal-crear-cargos" >
                        Registrar Cargo
                    </button><br>

                </div><br>

                <div class="card-body">
                    <table class="table table-bordered table-striped dt-responsive tablacargos" widt="100%">
                        <thead>
                            <tr>
                                <th style="width:10px">#</th>
                                <th>Cargo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        
                        <?php ?>

                        <?php
                            foreach($cargos as $key => $value){

                        ?>
                        <tr>                    
                            <td><?php echo ($key+1) ?></td>
                            <td><?php echo $value["nom_cargos"] ?></td>
                            
                            
                            <td>

                            <div class='btn-group'>
                            
                                <button  class="btn btn-warning btn-sm btneditarcargos "
                                data-target="#modal-editar-cargos"
                                data-toggle="modal"
                                idcargos2="<?php echo $value["id_cargos"]?>">
                                <i class="fas fa-pencil-alt text-white"></i>
                                </button>  

                                <button class="btn btn-danger btn-sm btneliminarcargos"
                                data-toggle="modal"
                                idcargos1="<?php echo $value["id_cargos"]?>">
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



<div class="modal modal-default fade" id="modal-crear-cargos">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-body">
    <div class="modal-header">
        <h4 class="alert alert-success alert-dismissible ">Agregar Cargo</h4>
    </div>
    <form method="post" enctype="multipart/form-data">

        <div class="form-group has-feedback" bis_skin_checked="1">
            <input type="text" id="limcargos" class="form-control" name="nom_cargos" placeholder="Nuevo Cargo">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="modal-footer"> 
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        <?php 

            $guardarcargos = new ctrcargos();
            $guardarcargos -> ctrguardarcargos();
            
            
        ?>                     
    </form>
                    </div>

</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<!-- /.EDITAR -->

<div class="modal modal-default fade" id="modal-editar-cargos">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h4 class="alert alert-warning alert-dismissible ">Editar Cargos</h4>
    </div>
    <form method="post" enctype="multipart/form-data">

        <div class="form-group has-feedback" bis_skin_checked="1">
            <input type="hidden" name="id_cargosE">
            <input type="text" class="form-control" name="nom_cargosE">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="modal-footer"> 
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        <?php 

            $guardarcargoseditados = new ctrcargos();
            $guardarcargoseditados -> ctrguardarcargoseditados();
            
            
        ?>

                       
    </form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<section class="content-header">

<div class="container-flui">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Administrar Direcciones</h1>
        </div>
    </div>
</div>

</section>

<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-info card-outline">
                <div class="card-header limpiardirecciones ">
                    <button type="button" class="btn btn-success crear-direcciones" data-toggle="modal" data-target="#modal-crear-direcciones" >
                        Registrar Organigrama
                    </button><br>

                </div><br>

                <div class="card-body">
                    <table class="table table-bordered table-striped dt-responsive tabladirecciones" widt="100%">
                        <thead>
                            <tr>
                                <th style="width:10px">#</th>
                                <th>Organigrama</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        
                        <?php ?>

                        <?php
                            foreach($direcciones as $key => $value){

                        ?>
                        <tr>                    
                            <td><?php echo ($key+1) ?></td>
                            <td><?php echo $value["nom_direcciones"] ?></td>
                            
                            
                            <td>

                            <div class='btn-group'>
                            
                                <button  class="btn btn-warning btn-sm btneditardirecciones "
                                data-target="#modal-editar-direcciones"
                                data-toggle="modal"
                                iddirecciones2="<?php echo $value["id_direcciones"]?>">
                                <i class="fas fa-pencil-alt text-white"></i>
                                </button>  

                                <button class="btn btn-danger btn-sm btneliminardirecciones"
                                data-toggle="modal"
                                iddirecciones1="<?php echo $value["id_direcciones"]?>">
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



<div class="modal modal-default fade" id="modal-crear-direcciones">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-body">
    <div class="modal-header">
        <h4 class="alert alert-success alert-dismissible ">Agregar Organigrama</h4>
    </div>
    <form method="post" enctype="multipart/form-data">

        <div class="form-group has-feedback" bis_skin_checked="1">
            <input type="text" id="limdirecciones" class="form-control" name="nom_direcciones" placeholder="Nueva Direccion">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="modal-footer"> 
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        <?php 

            $guardardirecciones = new ctrdirecciones();
            $guardardirecciones -> ctrguardardirecciones();
            
            
        ?>                     
    </form>
                    </div>

</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<!-- /.EDITAR -->

<div class="modal modal-default fade" id="modal-editar-direcciones">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h4 class="alert alert-warning alert-dismissible ">Editar Organigrama</h4>
    </div>
    <form method="post" enctype="multipart/form-data">

        <div class="form-group has-feedback" bis_skin_checked="1">
            <input type="hidden" name="id_direccionesE">
            <input type="text" class="form-control" name="nom_direccionesE">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="modal-footer"> 
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        <?php 

            $guardardireccioneseditados = new ctrdirecciones();
            $guardardireccioneseditados -> ctrguardardireccioneseditados();
            
            
        ?>

                       
    </form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<section class="content-header">

<div class="container-flui">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Administrar puestos</h1>
        </div>
    </div>
</div>

</section>

<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-info card-outline">
                <div class="card-header limpiarpuestos ">
                    <button type="button" class="btn btn-success crear-puestos" data-toggle="modal" data-target="#modal-crear-puestos" >
                        Registrar Puesto
                    </button><br>

                </div><br>

                <div class="card-body">
                    <table class="table table-bordered table-striped dt-responsive tablapuestos" widt="100%">
                        <thead>
                            <tr>
                                <th style="width:10px">#</th>
                                <th>Puesto</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        
                        <?php ?>

                        <?php
                            foreach($puestos as $key => $value){

                        ?>
                        <tr>                    
                            <td><?php echo ($key+1) ?></td>
                            <td><?php echo $value["nom_puestos"] ?></td>
                            
                            
                            <td>

                            <div class='btn-group'>
                            
                                <button  class="btn btn-warning btn-sm btneditarpuestos "
                                data-target="#modal-editar-puestos"
                                data-toggle="modal"
                                idpuestos2="<?php echo $value["id_puestos"]?>">
                                <i class="fas fa-pencil-alt text-white"></i>
                                </button>  

                                <button class="btn btn-danger btn-sm btneliminarpuestos"
                                data-toggle="modal"
                                idpuestos1="<?php echo $value["id_puestos"]?>">
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



<div class="modal modal-default fade" id="modal-crear-puestos">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-body">
    <div class="modal-header">
        <h4 class="alert alert-success alert-dismissible ">Agregar Puesto</h4>
    </div>
    <form method="post" enctype="multipart/form-data">

        <div class="form-group has-feedback" bis_skin_checked="1">
            <input type="text" id="limpuestos" class="form-control" name="nom_puestos" placeholder="Nuevo Puesto">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="modal-footer"> 
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        <?php 

            $guardarpuestos = new ctrpuestos();
            $guardarpuestos -> ctrguardarpuestos();
            
            
        ?>                     
    </form>
                    </div>

</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<!-- /.EDITAR -->

<div class="modal modal-default fade" id="modal-editar-puestos">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h4 class="alert alert-warning alert-dismissible ">Editar Puesto</h4>
    </div>
    <form method="post" enctype="multipart/form-data">

        <div class="form-group has-feedback" bis_skin_checked="1">
            <input type="hidden" name="id_puestosE">
            <input type="text" class="form-control" name="nom_puestosE">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="modal-footer"> 
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        <?php 

            $guardarpuestoseditados = new ctrpuestos();
            $guardarpuestoseditados -> ctrguardarpuestoseditados();
            
            
        ?>

                       
    </form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<section class="content-header">

<div class="container-flui">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Administrar Unidades</h1>
        </div>
    </div>
</div>

</section>

<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-info card-outline">
                <div class="card-header limpiarunidades ">
                    <button type="button" class="btn btn-success crear-unidades" data-toggle="modal" data-target="#modal-crear-unidades" >
                        Registrar Unidades
                    </button><br>

                </div><br>

                <div class="card-body">
                    <table class="table table-bordered table-striped dt-responsive tablaunidades" widt="100%">
                        <thead>
                            <tr>
                                <th style="width:10px">#</th>
                                <th>Unidades</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        
                        <?php ?>

                        <?php
                            foreach($unidades as $key => $value){

                        ?>
                        <tr>                    
                            <td><?php echo ($key+1) ?></td>
                            <td><?php echo $value["nom_unidades"] ?></td>
                            
                            
                            <td>

                            <div class='btn-group'>
                            
                                <button  class="btn btn-warning btn-sm btneditarunidades "
                                data-target="#modal-editar-unidades"
                                data-toggle="modal"
                                idunidades2="<?php echo $value["id_unidades"]?>">
                                <i class="fas fa-pencil-alt text-white"></i>
                                </button>  

                                <button class="btn btn-danger btn-sm btneliminarunidades"
                                data-toggle="modal"
                                idunidades1="<?php echo $value["id_unidades"]?>">
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



<div class="modal modal-default fade" id="modal-crear-unidades">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-body">
    <div class="modal-header">
        <h4 class="alert alert-success alert-dismissible ">Agregar Unidad</h4>
    </div>
    <form method="post" enctype="multipart/form-data">

        <div class="form-group has-feedback" bis_skin_checked="1">
            <input type="text" id="limunidades" class="form-control" name="nom_unidades" placeholder="Nueva Unidad">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="modal-footer"> 
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        <?php 

            $guardarunidades = new ctrunidades();
            $guardarunidades -> ctrguardarunidades();
            
            
        ?>                     
    </form>
                    </div>

</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<!-- /.EDITAR -->

<div class="modal modal-default fade" id="modal-editar-unidades">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h4 class="alert alert-warning alert-dismissible ">Editar Unidad</h4>
    </div>
    <form method="post" enctype="multipart/form-data">

        <div class="form-group has-feedback" bis_skin_checked="1">
            <input type="hidden" name="id_unidadesE">
            <input type="text" class="form-control" name="nom_unidadesE">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="modal-footer"> 
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        <?php 

            $guardarunidadeseditados = new ctrunidades();
            $guardarunidadeseditados -> ctrguardarunidadeseditados();
            
            
        ?>

                       
    </form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
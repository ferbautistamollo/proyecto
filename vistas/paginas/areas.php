
<section class="content-header">

<div class="container-flui">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Administrar areas</h1>
        </div>
    </div>
</div>

</section>

<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-info card-outline">
                <div class="card-header limpiarareas ">
                    <button type="button" class="btn btn-success crear-areas" data-toggle="modal" data-target="#modal-crear-areas" >
                        Registrar Area
                    </button><br>

                </div><br>

                <div class="card-body">
                    <table class="table table-bordered table-striped dt-responsive tablaareas" widt="100%">
                        <thead>
                            <tr>
                                <th style="width:10px">#</th>
                                <th>Area</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        
                        <?php ?>

                        <?php
                            foreach($areas as $key => $value){

                        ?>
                        <tr>                    
                            <td><?php echo ($key+1) ?></td>
                            <td><?php echo $value["nom_areas"] ?></td>
                            
                            
                            <td>

                            <div class='btn-group'>
                            
                                <button  class="btn btn-warning btn-sm btneditarareas "
                                data-target="#modal-editar-areas"
                                data-toggle="modal"
                                idareas2="<?php echo $value["id_areas"]?>">
                                <i class="fas fa-pencil-alt text-white"></i>
                                </button>  

                                <button class="btn btn-danger btn-sm btneliminarareas"
                                data-toggle="modal"
                                idareas1="<?php echo $value["id_areas"]?>">
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



<div class="modal modal-default fade" id="modal-crear-areas">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-body">
    <div class="modal-header">
        <h4 class="alert alert-success alert-dismissible ">Agregar Area</h4>
    </div>
    <form method="post" enctype="multipart/form-data">

        <div class="form-group has-feedback" bis_skin_checked="1">
            <input type="text" id="limareas" class="form-control" name="nom_areas" placeholder="Nueva Area">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="modal-footer"> 
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        <?php 

            $guardarareas = new ctrareas();
            $guardarareas -> ctrguardarareas();
            
            
        ?>                     
    </form>
                    </div>

</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<!-- /.EDITAR -->

<div class="modal modal-default fade" id="modal-editar-areas">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h4 class="alert alert-warning alert-dismissible ">Editar Area</h4>
    </div>
    <form method="post" enctype="multipart/form-data">

        <div class="form-group has-feedback" bis_skin_checked="1">
            <input type="hidden" name="id_areasE">
            <input type="text" class="form-control" name="nom_areasE">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="modal-footer"> 
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        <?php 

            $guardarareaseditados = new ctrareas();
            $guardarareaseditados -> ctrguardarareaseditados();
            
            
        ?>

                       
    </form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
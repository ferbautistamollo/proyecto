
<section class="content-header">

<div class="container-flui">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Administrar Contraseñas</h1>
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
                    <table class="table table-bordered table-striped dt-responsive tablacontrase" widt="100%">
                        <thead>
                            <tr>
                                <th style="width:10px">#</th>
                                <th>Contraseñas</th>
                                <th>Sistema</th>
                                <th>Usuario</th>
                                
                            </tr>
                        </thead>
                        
                        <tbody>
                        
                        <?php ?>

                        <?php
                            //echo "<pre>"; print_r($contrase); echo "</pre>";

                            foreach($contrase as $key => $value){

                            

                        ?>
                            <tr>                    
                                <td><?php echo ($key+1) ?></td>
                                <td><?php echo $value["con_contrase"] ?></td>

                                <td><?php echo $value["nom_sistemasait"] ?></td>

                                <td><?php echo $value["usu_usuarios"] ?></td>
                                
                                
                        
                                

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


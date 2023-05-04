<section class="content-header">

    <div class="container-flui">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Emisores y Receptores de Envios </h1>
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
                            <table class="table table-bordered table-striped dt-responsive enviousuarios" widt="100%" >
                                <thead>
                                    <tr>                                       
                                        <th style="width:10px">#</th>                                       
                                        <th>Apellidos y Nombres</th>                                        
                                        <th>Correo</th>
                                        <th>Emisor</th>
                                        <th>Correo</th>
                                        <th>Receptor</th>                                       
                                    </tr>
                                </thead>
                             
                                <tbody>
                                
                               <?php
                                    foreach($usuarios as $key => $value){
                                                                                                      
                                ?>
                                <tr>                    
                                                                       
                                    <td><?php echo ($key+1) ?></td>
                                    <td><?php echo $value["ap_usuarios"]." ".$value["nom_usuarios"]?></td>                                                                       
                                    <td><?php echo $value["correo_usuarios"] ?></td>
                                   <td>
                                                                     
                                        
                                            <input type="checkbox" 
                                            id="myCheckboxe"
                                            class="myCheckboxe"
                                            idsus1="<?php echo $value["id_usuarios"]?>"                                            
                                            <?php if ($value["este_usuarios"] == 1) { echo 'checked'; } ?>>
                                        
                                        
                                    </td> 
                                    
                                    <td><?php echo $value["correo_usuarios"] ?></td>
                                   <td>
                                                                                                            
                                            <input type="checkbox" 
                                            id="myCheckboxr"
                                            class="myCheckboxr"
                                            idsus="<?php echo $value["id_usuarios"]?>"                                            
                                            <?php if ($value["estr_usuarios"] == 1) { echo 'checked'; } ?>>
                                        
                                        
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








<body class="hold-transition login-page">
<div class="login-box">
 
  <!-- /.login-logo -->
  <div class="login-box-body">
    <h1><p class="login-box-msg"><b>SGC</b></p></h1>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="ingresousuarios" placeholder="Usuario">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="ingresocontrase" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
      
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>



      <?php
        $ingreso=ctrusuarios::ctringresoadministradores();
      
      
      ?>

    </form>

  

  </div>
 
</div>




</body>
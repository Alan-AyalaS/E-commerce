<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register | 5sFOAM</title>

  <link rel="stylesheet" href="../Util/css/toastr.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Util/css/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Util/css/adminlte.min.css">
  <link rel="stylesheet" href="../Util/css/sweetalert2.min.css"></link>
</head>

<div class="modal fade" id="terminus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="card card-success">
        <div class="card-header">
            <h1 class="card-title fs-5">Terminos y Condiciones</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="card-body">
            <p>* utilizaremos sus datos para generar publicidad de acuerdo a sus gustos</p>
            <p>* utilizaremos sus datos para generar publicidad de acuerdo a sus gustos</p>
            <p>* utilizaremos sus datos para generar publicidad de acuerdo a sus gustos</p>

        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-secondary btn.block" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<body class="hold-transition login-page">
<div class="" style = "margin-top: 90px;">
  <div class="login-logo">
    <a href="../index.php">
      <img src="../Util/imgs/Logo5sFOAM.png" alt="" width="250px" style="margin-bottom:25px;">
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Registrarse</p>
      
      <form id="form-register">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="username">Nombre de Usuario</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Ingresa el nombre de Usuario">
                  </div>
            </div>    
            <div class="col-sm-6">
            <div class="form-group">
                    <label for="pass">Contraseña</label>
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Ingresa la Contraseña">
                  </div>
                  <div class="form-group">
                    <label for="nombres">Nombres</label>
                    <input type="text" name="nombres" class="form-control" id="nombres" placeholder="Ingresa sus nombres">
                  </div>
                  <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Ingrese su teléfono">
                  </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
                    <label for="pass_repeat">Confirmar Contraseña</label>
                    <input type="password" name="pass_repeat" class="form-control" id="pass_repeat" placeholder="Confirme la Contraseña">
                  </div>
                  <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Ingresa sus apellidos">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Ingresa su Email">
                  </div>
            </div>
                <div class="col-sm-12">
                    <div class="form-group mb-0">
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="terms" class="custom-control-input" id="terms">
                        <label class="custom-control-label" for="terms">Estoy de acuerdo con los <a href="#" data-toggle="modal" data-target="#terminus">terminos de servicio</a>.</label>
                    </div>
                </div>
            </div>
               
                <!-- /.card-body -->
                <div class="card-footer text-center" style="display: flex; width: 100%; justify-content: center; background-color: #fff;">
                  <button type="submit" class="btn btn-lg bg-gradient-primary">Registrar</button>
                </div>
        </form>
    </div>

 </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../Util/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Util/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../Util/js/adminlte.min.js"></script>

<script src="../Util/js/toastr.min.js"></script>


<script src="../Util/js/jquery.validate.min.js"></script>
<script src="../Util/js/additional-methods.min.js"></script>

<script src="../Util/js/sweetalert2.min.js"></script>


<script src="register.js"></script>


</body>
</html>

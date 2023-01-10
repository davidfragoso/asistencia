<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Asistencia</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../admin/public/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../admin/public/css/font-awesome.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/public/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../admin/public/css/blue.css">
  <link rel="shortcut icon" href="../admin/public/img/favicon.ico">

</head>

<body class="hold-transition lockscreen" style="background-color:#00ab84">

  <!-- Automatic element centering -->
  <div class="lockscreen-wrapper">
    <?php
    //include '../ajax/asistencia.php' 
    ?>
    <div name="movimientos" id="movimientos">
    </div>


    <div class="login-box-body">
      <div class="lockscreen-logo">
        <img src="../admin/public/images/logout.png" width="250" height="100" href="login.html">
      </div>
      <div class="lockscreen-name">ASISTENCIA</div>

      <!-- START LOCK SCREEN ITEM -->
      <div class="lockscreen-item">
        <!-- lockscreen image -->
       
        <!-- /.lockscreen-image -->

        <!-- lockscreen credentials (contains the form) -->
        <form action="" class="lockscreen-credentials" name="formulario" id="formulario" method="POST">
          <div class="input-group">
            <input type="password" class="form-control" name="codigo_persona" id="codigo_persona" placeholder="ID de asistencia">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-primary"><i class="fa fa-arrow-right text-muted"></i></button>
            </div>
          </div>
        </form>
        <!-- /.lockscreen credentials -->

      </div>
      <!-- /.lockscreen-item -->
      <div class="help-block text-center">
        Ingresa tu ID de asistencia
      </div>
      <div class="text-center"></div>
      <div class="lockscreen-footer text-center">
        <a href="../admin/">Iniciar Sesión</a>
      </div>
    </div>
    <!-- /.center -->
  </div>
  <!-- User name -->



  <!-- jQuery -->
  <script src="../admin/public/js/jquery-3.1.1.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Bootbox -->
  <script src="../admin/public/js/bootbox.min.js"></script>

  <script type="text/javascript" src="scripts/asistencia.js"></script>


</body>

</html>
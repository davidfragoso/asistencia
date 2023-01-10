<?php
include 'include/config.php';
require_once 'include/functions.php';
ob_start();
session_start();
?>


<?php
require 'header.php';
?>

<title>Lista de Horarios</title>
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h1 class="box-title">Horarios 
            <a class="btn btn-success" href="crearhorario.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar</a>         
            </h1>
            <div class="box-tools pull-right">
            </div>
          </div>
          &nbsp;

          <div class="panel-body"></div>
          <div id="mynew" class="col-sm-12"></div>
          <div class="panel-body" style="padding: 15px 20% 25px 20%; max-width:auto">

            <!-- container -->
            <table class="container">
              <div class="panel" style="margin-top: 20px; background: #009d71">
                <div class="panel-heading" style="color:white" ><i class="fa fa-calendar" aria-hidden="true"></i> Lista de Horarios</div>
                <div class="panel-body nopadding">
                  <?php
                  if (isset($_GET['page'])) {
                    horariostable($_GET['page']);
                  } else {
                    horariostable(1);
                  }
                  ?>
                </div>
              </div>
            </table>
          </div>
          <!-- container -->

          <!-- apend data VER HORARIO -->
          <div id="appenddata"></div>
          <?php
          require 'verhorario.php';
          ?>

        </div>

      </div>
    </div>
  </section>
</div>


<?php
ob_end_flush();
require 'footer.php';
?>
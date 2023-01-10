<?php
include 'include/config.php';
require_once'include/functions.php';
?>

<?php
//activamos almacenamiento en el buffer
ob_start();

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
            &nbsp;
            <?php require 'menu.php';?>
       

            <div class="panel-body">

    <!-- container -->
      <div class="container" >
         <div class="panel panel-info" style="margin-top: 20px;">
           <div class="panel-heading"><i class="fa fa-calendar" aria-hidden="true"></i> Lista de Horarios</div>
           <div class="panel-body nopadding">
                <?php 
                    if (isset($_GET['page'])){
                      horariostable($_GET['page']);
                    }else{
                      horariostable(1);
                    }
                ?>
           </div>
         </div>
      </div>
    <!-- container -->

    <!-- apend data -->
    <div id="appenddata"></div>
    <!-- apend data -->


<!-- append modal set data -->
<div class="modal fade" id="DataEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close canceltask" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-thumb-tack"></i> Agregar Tarea</h4>
      </div>
      <div class="modal-body">
        
        <form id="taskfrm">
           <label>Laboratorio</label>
           <input class="form-control" type="text" id="nametask" >
           <label>Maestro</label>
           <input class="form-control" type="text" id="nametask" >
           <label>Color:</label>
           <select class="form-control" id="idcolortask">
              <option value="purple-label">Purpura</option>
              <option value="red-label">Rojo</option>
              <option value="blue-label">Azul</option>
              <option value="pink-label">Rosa</option>
              <option value="green-label">Verde</option>
           </select> 
          <input id="tede" type="hidden" name="tede" >
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="savetask btn btn-success"><i class="fa fa-floppy-o"></i> Guardar</button>
        <button type="button" class="canceltask btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!-- append modal set data -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- datetimepicker -->
    <script src="js/moment-with-locales.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <!-- validate -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <!-- script -->
    <script src="js/scripts-custom.js"></script>
    
</section>
</div>
    <?php
require 'footer.php'; 


ob_end_flush();
?>



<?php
require 'header.php';
?>
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content" style="padding: 0 25px 0 25px; max-width:75%;max-height:45%">
        <!-- Default box -->


        <div class="row">
                <div id="mynew"></div>
                <div class="panel-body contentHorario table-responsive" >

                    <div class="box">

                            <div class="panel-body">


                                <form id="horariofrm">
                                    <label>Nombre:</label>
                                    <input class="form-control" type="text" name="nombre">
                                    <!-- <label>Descripción:</label>
                                    <textarea class="form-control" name="descripcion" rows="3"></textarea>
                                    <label>Dias:</label>
                                    <div id="days-list" class="col-sm-12">
                                        <a data-day="1" class="day-option">Lunes</a>
                                        <a data-day="2" class="day-option">Martes</a>
                                        <a data-day="3" class="day-option">Miercoles</a>
                                        <a data-day="4" class="day-option">Jueves</a>
                                        <a data-day="5" class="day-option">Viernes</a>

                                    </div>
                                    <input id="days-chose" class="form-control" type="text" name="days">
                                    <label>Inicio:</label>
                                    <input class="form-control" type="text" id="time1" name="tiempo1">
                                    <label>Final:</label>
                                    <input class="form-control" type="text" id="time2" name="tiempo2">
                                    <label>Dividir Entre:</label>
                                    <select class="form-control" name="minutos">
                                        <option></option>
                                        <option value="30">30 Minutos</option>
                                        <option value="40">40 Minutos</option>
                                        <option value="50">50 minutos</option>
                                        <option value="60">1 Hora</option>
                                    </select> -->
                                </form>


                                <div class="modal-footer">
                                    <a class="btn btn-primary pull-left" href="lista.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</a>

                                    <button type="button" class="create-horario btn btn-success"href="renderhorario.php"><i class="fa fa-calendar-check-o"></i> Crear</button>
                                    <!-- <button type="button" class="cancel-new btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button> -->
                                </div>
                            </div>
                    </div>
                </div>
        </div>
    </section>
</div>

<!-- modal nuevo horario -->

<div id="mynew" class="col-sm-4"></div>
<!-- append modal set data -->
<div class="modal fade" id="DataEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close canceltask" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-thumb-tack"></i> Laboratorio</h4>
            </div>
            <div class="modal-body">

                <form id="taskfrm">
                    <label>Maestro</label>
                    <input class="form-control" type="text" id="nametask">
                    <label>Materia</label>
                    <input class="form-control" type="text" id="namemateria">
                    <label>Cocina</label>
                    <input class="form-control" type="text" id="nametaller">
                    <label>Color:</label>
                    <select class="form-control" id="idcolortask">
                        <option value="purple-label">Purpura</option>
                        <option value="red-label">Rojo</option>
                        <option value="blue-label">Azul</option>
                        <option value="yellow-label">Amarillo</option>
                        <option value="green-label">Verde</option>
                    </select>
                    <input id="tede" type="hidden" name="tede">
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



<?php
require 'footer.php';
?>
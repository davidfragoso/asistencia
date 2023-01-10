<!-- append modal set data -->
<div class="modal fade" id="DataEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close canceltask" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-thumb-tack"></i> Asignar Actividad</h4>
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
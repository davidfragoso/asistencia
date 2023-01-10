<?php

require_once 'config.php';
// conexion de la base de datos
$conexion = Conexion::singleton_conexion();


if (isset($_POST['process'])) {
  #---------------------------------------------------------------------------------------------------

  // Var Process
  $process = $_POST['process'];


  if ($process == 1) {
    #---------------------------------------------------------------------------------------------------

    // // Dias
    // $dias = explode(',', $_POST['days']);
    // // Contar dias
    // $countdays = count($dias);

    $name = strip_tags($_POST['nombre']);
    


    // Acomodar Dias
    echo '
    <h1 class="horario-name" style="color:black"><i class="fa fa-calendar" aria-hidden="true"></i> ' . $name . ' </h1>
    <table id="thetable" class="table table-bordered">
        <thead class="thead">
            <tr>
                <th class="horarioheader"><i class="fa fa-clock-o"></i> Horario</th>
                <th><i class="fa fa-angle-right"></i> Lunes</th>
                <th><i class="fa fa-angle-right"></i> Martes</th>
                <th><i class="fa fa-angle-right"></i> Miercoles</th>
                <th><i class="fa fa-angle-right"></i> Jueves</th>
                <th><i class="fa fa-angle-right"></i> Viernes</th>
            </tr>
        </thead>
<tbody>';

   
    echo ' <tbody>
    <tr id="trb545cded410173b2ec608282e4f1031b2e32c17f">

        <td class="td-time">

            <div id="parentb545cded410173b2ec608282e4f1031b2e32c17f" class="timeblock">
                <strong id="datab545cded410173b2ec608282e4f1031b2e32c17f">07:00 am - 07:50 am</strong>
                <button data-time="b545cded410173b2ec608282e4f1031b2e32c17f" class="changethetime btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i></button>
            </div>

            <div id="editb545cded410173b2ec608282e4f1031b2e32c17f" class="hideedittime text-center" style="display: none;">
                <input id="inputb545cded410173b2ec608282e4f1031b2e32c17f" type="text" class="form-control" value="07:00 am - 07:50 am">
                <p></p><button data-save="b545cded410173b2ec608282e4f1031b2e32c17f" class="savetime btn btn-block btn-xs btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button><button data-block="b545cded410173b2ec608282e4f1031b2e32c17f" class="deleteblock btn btn-block btn-xs btn-warning"><i class="fa fa-ban"></i> Eliminar </button><button class="canceledit btn btn-block btn-xs btn-danger"><i class="fa fa-times"></i> Cancelar
                </button>
            </div>

        </td>
        <td class="td-line">
            <div id="ma05701" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma05701" data-row="ma05701" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="ma05702" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma05702" data-row="ma05702" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="ma05703" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma05703" data-row="ma05703" class="addinfo btn btn-xs btn-primary"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="ma05704" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma05704" data-row="ma05704" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="ma05705" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma05705" data-row="ma05705" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>
    </tr>
    <tr id="tr93f1feb801c3bdc53ae693733e398433173c2241">

        <td class="td-time">

            <div id="parent93f1feb801c3bdc53ae693733e398433173c2241" class="timeblock">
                <strong id="data93f1feb801c3bdc53ae693733e398433173c2241">07:50 am - 08:40 am</strong>
                <button data-time="93f1feb801c3bdc53ae693733e398433173c2241" class="changethetime btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i></button>
            </div>

            <div id="edit93f1feb801c3bdc53ae693733e398433173c2241" class="hideedittime text-center" style="display: none;">
                <input id="input93f1feb801c3bdc53ae693733e398433173c2241" type="text" class="form-control" value="07:50 am - 08:40 am">
                <p></p><button data-save="93f1feb801c3bdc53ae693733e398433173c2241" class="savetime btn btn-block btn-xs btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button><button data-block="93f1feb801c3bdc53ae693733e398433173c2241" class="deleteblock btn btn-block btn-xs btn-warning"><i class="fa fa-ban"></i> Eliminar </button><button class="canceledit btn btn-block btn-xs btn-danger"><i class="fa fa-times"></i> Cancelar
                </button>
            </div>

        </td>
        <td class="td-line">
            <div id="ma04801" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma04801" data-row="ma04801" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="ma04802" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma04802" data-row="ma04802" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="ma04803" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma04803" data-row="ma04803" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="ma04804" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma04804" data-row="ma04804" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="ma04805" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma04805" data-row="ma04805" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>
    </tr>
    <tr id="tr182afed6f08149babb23ef697cb9ee7c517a8f62">

        <td class="td-time">

            <div id="parent182afed6f08149babb23ef697cb9ee7c517a8f62" class="timeblock" style="display: block;">
                <strong id="data182afed6f08149babb23ef697cb9ee7c517a8f62" class="animated">09:10 am - 10:00 am</strong>
                <button data-time="182afed6f08149babb23ef697cb9ee7c517a8f62" class="changethetime btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i></button>
            </div>

            <div id="edit182afed6f08149babb23ef697cb9ee7c517a8f62" class="hideedittime text-center" style="display: none;">
                <input id="input182afed6f08149babb23ef697cb9ee7c517a8f62" type="text" class="form-control" value="09:30 am - 10:20 am">
                <p></p><button data-save="182afed6f08149babb23ef697cb9ee7c517a8f62" class="savetime btn btn-block btn-xs btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button><button data-block="182afed6f08149babb23ef697cb9ee7c517a8f62" class="deleteblock btn btn-block btn-xs btn-warning"><i class="fa fa-ban"></i> Eliminar </button><button class="canceledit btn btn-block btn-xs btn-danger"><i class="fa fa-times"></i> Cancelar
                </button>
            </div>

        </td>
        <td class="td-line">
            <div id="ma02011" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma02011" data-row="ma02011" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="ma02012" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma02012" data-row="ma02012" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="ma02013" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma02013" data-row="ma02013" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="ma02014" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma02014" data-row="ma02014" class="addinfo btn btn-xs btn-primary"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="ma02015" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma02015" data-row="ma02015" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>
    </tr>
    <tr id="tr23541d3f0cbff5987493476181e9af05ba94351e">

        <td class="td-time">

            <div id="parent23541d3f0cbff5987493476181e9af05ba94351e" class="timeblock" style="display: block;">
                <strong id="data23541d3f0cbff5987493476181e9af05ba94351e" class="animated">10:00 am - 10:50 am</strong>
                <button data-time="23541d3f0cbff5987493476181e9af05ba94351e" class="changethetime btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i></button>
            </div>

            <div id="edit23541d3f0cbff5987493476181e9af05ba94351e" class="hideedittime text-center" style="display: none;">
                <input id="input23541d3f0cbff5987493476181e9af05ba94351e" type="text" class="form-control" value="10:20 am - 11:10 am">
                <p></p><button data-save="23541d3f0cbff5987493476181e9af05ba94351e" class="savetime btn btn-block btn-xs btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button><button data-block="23541d3f0cbff5987493476181e9af05ba94351e" class="deleteblock btn btn-block btn-xs btn-warning"><i class="fa fa-ban"></i> Eliminar </button><button class="canceledit btn btn-block btn-xs btn-danger"><i class="fa fa-times"></i> Cancelar
                </button>
            </div>

        </td>
        <td class="td-line">
            <div id="ma01111" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma01111" data-row="ma01111" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="ma01112" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma01112" data-row="ma01112" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="ma01113" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma01113" data-row="ma01113" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="ma01114" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma01114" data-row="ma01114" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="ma01115" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-ma01115" data-row="ma01115" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>
    </tr>
    <tr id="tr67410b14a455c4a3072c0d6e126e5bf6b47f9067">

        <td class="td-time">

            <div id="parent67410b14a455c4a3072c0d6e126e5bf6b47f9067" class="timeblock" style="display: block;">
                <strong id="data67410b14a455c4a3072c0d6e126e5bf6b47f9067" class="animated">10:50 am - 11:40 am</strong>
                <button data-time="67410b14a455c4a3072c0d6e126e5bf6b47f9067" class="changethetime btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i></button>
            </div>

            <div id="edit67410b14a455c4a3072c0d6e126e5bf6b47f9067" class="hideedittime text-center" style="display: none;">
                <input id="input67410b14a455c4a3072c0d6e126e5bf6b47f9067" type="text" class="form-control" value="11:10 am - 12:00 pm">
                <p></p><button data-save="67410b14a455c4a3072c0d6e126e5bf6b47f9067" class="savetime btn btn-block btn-xs btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button><button data-block="67410b14a455c4a3072c0d6e126e5bf6b47f9067" class="deleteblock btn btn-block btn-xs btn-warning"><i class="fa fa-ban"></i> Eliminar </button><button class="canceledit btn btn-block btn-xs btn-danger"><i class="fa fa-times"></i> Cancelar
                </button>
            </div>

        </td>
        <td class="td-line">
            <div id="mp00211" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp00211" data-row="mp00211" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp00212" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp00212" data-row="mp00212" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp00213" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp00213" data-row="mp00213" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp00214" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp00214" data-row="mp00214" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp00215" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp00215" data-row="mp00215" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>
    </tr>
    <tr id="trd427cd5f6ce7166030771618e763a33494765f1d">

        <td class="td-time">

            <div id="parentd427cd5f6ce7166030771618e763a33494765f1d" class="timeblock" style="display: block;">
                <strong id="datad427cd5f6ce7166030771618e763a33494765f1d" class="animated">11:40 am - 12:30 pm</strong>
                <button data-time="d427cd5f6ce7166030771618e763a33494765f1d" class="changethetime btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i></button>
            </div>

            <div id="editd427cd5f6ce7166030771618e763a33494765f1d" class="hideedittime text-center" style="display: none;">
                <input id="inputd427cd5f6ce7166030771618e763a33494765f1d" type="text" class="form-control" value="12:00 pm - 12:50 pm">
                <p></p><button data-save="d427cd5f6ce7166030771618e763a33494765f1d" class="savetime btn btn-block btn-xs btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button><button data-block="d427cd5f6ce7166030771618e763a33494765f1d" class="deleteblock btn btn-block btn-xs btn-warning"><i class="fa fa-ban"></i> Eliminar </button><button class="canceledit btn btn-block btn-xs btn-danger"><i class="fa fa-times"></i> Cancelar
                </button>
            </div>

        </td>
        <td class="td-line">
            <div id="mp05211" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp05211" data-row="mp05211" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp05212" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp05212" data-row="mp05212" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp05213" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp05213" data-row="mp05213" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp05214" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp05214" data-row="mp05214" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp05215" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp05215" data-row="mp05215" class="addinfo btn btn-xs btn-primary"><i class="fa fa-plus"></i></button>
            </div>
        </td>
    </tr>
    <tr id="tr2b1ed11f70803d888fe268880a708dbf8e8fa86a">

        <td class="td-time">

            <div id="parent2b1ed11f70803d888fe268880a708dbf8e8fa86a" class="timeblock">
                <strong id="data2b1ed11f70803d888fe268880a708dbf8e8fa86a">12:50 pm - 01:40 pm</strong>
                <button data-time="2b1ed11f70803d888fe268880a708dbf8e8fa86a" class="changethetime btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i></button>
            </div>

            <div id="edit2b1ed11f70803d888fe268880a708dbf8e8fa86a" class="hideedittime text-center" style="display: none;">
                <input id="input2b1ed11f70803d888fe268880a708dbf8e8fa86a" type="text" class="form-control" value="12:50 pm - 01:40 pm">
                <p></p><button data-save="2b1ed11f70803d888fe268880a708dbf8e8fa86a" class="savetime btn btn-block btn-xs btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button><button data-block="2b1ed11f70803d888fe268880a708dbf8e8fa86a" class="deleteblock btn btn-block btn-xs btn-warning"><i class="fa fa-ban"></i> Eliminar </button><button class="canceledit btn btn-block btn-xs btn-danger"><i class="fa fa-times"></i> Cancelar
                </button>
            </div>

        </td>
        <td class="td-line">
            <div id="mp04101" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp04101" data-row="mp04101" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp04102" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp04102" data-row="mp04102" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp04103" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp04103" data-row="mp04103" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp04104" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp04104" data-row="mp04104" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp04105" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp04105" data-row="mp04105" class="addinfo btn btn-xs btn-primary"><i class="fa fa-plus"></i></button>
            </div>
        </td>
    </tr>
    <tr id="tr8cb430c66500662ae1dc85f13c57781bfe1b9dca">

        <td class="td-time">

            <div id="parent8cb430c66500662ae1dc85f13c57781bfe1b9dca" class="timeblock">
                <strong id="data8cb430c66500662ae1dc85f13c57781bfe1b9dca">01:40 pm - 02:30 pm</strong>
                <button data-time="8cb430c66500662ae1dc85f13c57781bfe1b9dca" class="changethetime btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i></button>
            </div>

            <div id="edit8cb430c66500662ae1dc85f13c57781bfe1b9dca" class="hideedittime text-center" style="display: none;">
                <input id="input8cb430c66500662ae1dc85f13c57781bfe1b9dca" type="text" class="form-control" value="01:40 pm - 02:30 pm">
                <p></p><button data-save="8cb430c66500662ae1dc85f13c57781bfe1b9dca" class="savetime btn btn-block btn-xs btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button><button data-block="8cb430c66500662ae1dc85f13c57781bfe1b9dca" class="deleteblock btn btn-block btn-xs btn-warning"><i class="fa fa-ban"></i> Eliminar </button><button class="canceledit btn btn-block btn-xs btn-danger"><i class="fa fa-times"></i> Cancelar
                </button>
            </div>

        </td>
        <td class="td-line">
            <div id="mp03201" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp03201" data-row="mp03201" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp03202" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp03202" data-row="mp03202" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp03203" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp03203" data-row="mp03203" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp03204" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp03204" data-row="mp03204" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp03205" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp03205" data-row="mp03205" class="addinfo btn btn-xs btn-primary"><i class="fa fa-plus"></i></button>
            </div>
        </td>
    </tr>
    <tr id="tr16610d60a8e8f52cb1fe3520b5b710a73ae3c04b">

        <td class="td-time">

            <div id="parent16610d60a8e8f52cb1fe3520b5b710a73ae3c04b" class="timeblock">
                <strong id="data16610d60a8e8f52cb1fe3520b5b710a73ae3c04b">02:30 pm - 03:20 pm</strong>
                <button data-time="16610d60a8e8f52cb1fe3520b5b710a73ae3c04b" class="changethetime btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i></button>
            </div>

            <div id="edit16610d60a8e8f52cb1fe3520b5b710a73ae3c04b" class="hideedittime text-center" style="display: none;">
                <input id="input16610d60a8e8f52cb1fe3520b5b710a73ae3c04b" type="text" class="form-control" value="02:30 pm - 03:20 pm">
                <p></p><button data-save="16610d60a8e8f52cb1fe3520b5b710a73ae3c04b" class="savetime btn btn-block btn-xs btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button><button data-block="16610d60a8e8f52cb1fe3520b5b710a73ae3c04b" class="deleteblock btn btn-block btn-xs btn-warning"><i class="fa fa-ban"></i> Eliminar </button><button class="canceledit btn btn-block btn-xs btn-danger"><i class="fa fa-times"></i> Cancelar
                </button>
            </div>

        </td>
        <td class="td-line">
            <div id="mp02301" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp02301" data-row="mp02301" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp02302" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp02302" data-row="mp02302" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp02303" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp02303" data-row="mp02303" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp02304" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp02304" data-row="mp02304" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp02305" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp02305" data-row="mp02305" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>
    </tr>
    <tr id="tr9fe4d627496a17ed5a48efe26f29458fee7e998a">

        <td class="td-time">

            <div id="parent9fe4d627496a17ed5a48efe26f29458fee7e998a" class="timeblock" style="display: block;">
                <strong id="data9fe4d627496a17ed5a48efe26f29458fee7e998a" class="animated">03:50 pm - 04:40 pm</strong>
                <button data-time="9fe4d627496a17ed5a48efe26f29458fee7e998a" class="changethetime btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i></button>
            </div>

            <div id="edit9fe4d627496a17ed5a48efe26f29458fee7e998a" class="hideedittime text-center" style="display: none;">
                <input id="input9fe4d627496a17ed5a48efe26f29458fee7e998a" type="text" class="form-control" value="03:20 pm - 04:10 pm">
                <p></p><button data-save="9fe4d627496a17ed5a48efe26f29458fee7e998a" class="savetime btn btn-block btn-xs btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button><button data-block="9fe4d627496a17ed5a48efe26f29458fee7e998a" class="deleteblock btn btn-block btn-xs btn-warning"><i class="fa fa-ban"></i> Eliminar </button><button class="canceledit btn btn-block btn-xs btn-danger"><i class="fa fa-times"></i> Cancelar
                </button>
            </div>

        </td>
        <td class="td-line">
            <div id="mp01401" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp01401" data-row="mp01401" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp01402" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp01402" data-row="mp01402" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp01403" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp01403" data-row="mp01403" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp01404" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp01404" data-row="mp01404" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp01405" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp01405" data-row="mp01405" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>
    </tr>
    <tr id="tr28e932bc1bedb20a0b81ae7c590abe5d5b2f2d80">

        <td class="td-time">

            <div id="parent28e932bc1bedb20a0b81ae7c590abe5d5b2f2d80" class="timeblock" style="display: block;">
                <strong id="data28e932bc1bedb20a0b81ae7c590abe5d5b2f2d80" class="animated">04:40 pm - 05:30 pm</strong>
                <button data-time="28e932bc1bedb20a0b81ae7c590abe5d5b2f2d80" class="changethetime btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i></button>
            </div>

            <div id="edit28e932bc1bedb20a0b81ae7c590abe5d5b2f2d80" class="hideedittime text-center" style="display: none;">
                <input id="input28e932bc1bedb20a0b81ae7c590abe5d5b2f2d80" type="text" class="form-control" value="04:10 pm - 05:00 pm">
                <p></p><button data-save="28e932bc1bedb20a0b81ae7c590abe5d5b2f2d80" class="savetime btn btn-block btn-xs btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button><button data-block="28e932bc1bedb20a0b81ae7c590abe5d5b2f2d80" class="deleteblock btn btn-block btn-xs btn-warning"><i class="fa fa-ban"></i> Eliminar </button><button class="canceledit btn btn-block btn-xs btn-danger"><i class="fa fa-times"></i> Cancelar
                </button>
            </div>

        </td>
        <td class="td-line">
            <div id="mp00501" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp00501" data-row="mp00501" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp00502" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp00502" data-row="mp00502" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp00503" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp00503" data-row="mp00503" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp00504" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp00504" data-row="mp00504" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp00505" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp00505" data-row="mp00505" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>
    </tr>
    <tr id="tr68ca7690fecb16783434c9023754a7109d0509eb">

        <td class="td-time">

            <div id="parent68ca7690fecb16783434c9023754a7109d0509eb" class="timeblock" style="display: block;">
                <strong id="data68ca7690fecb16783434c9023754a7109d0509eb" class="animated">05:30 pm - 06:20 pm</strong>
                <button data-time="68ca7690fecb16783434c9023754a7109d0509eb" class="changethetime btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i></button>
            </div>

            <div id="edit68ca7690fecb16783434c9023754a7109d0509eb" class="hideedittime text-center" style="display: none;">
                <input id="input68ca7690fecb16783434c9023754a7109d0509eb" type="text" class="form-control" value="05:00 pm - 05:50 pm">
                <p></p><button data-save="68ca7690fecb16783434c9023754a7109d0509eb" class="savetime btn btn-block btn-xs btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button><button data-block="68ca7690fecb16783434c9023754a7109d0509eb" class="deleteblock btn btn-block btn-xs btn-warning"><i class="fa fa-ban"></i> Eliminar </button><button class="canceledit btn btn-block btn-xs btn-danger"><i class="fa fa-times"></i> Cancelar
                </button>
            </div>

        </td>
        <td class="td-line">
            <div id="mp05501" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp05501" data-row="mp05501" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp05502" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp05502" data-row="mp05502" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp05503" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp05503" data-row="mp05503" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp05504" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp05504" data-row="mp05504" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp05505" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp05505" data-row="mp05505" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>
    </tr>
    <tr id="trc0f13f3647ffed61d6312b6461664585cd5a4c42">

        <td class="td-time">

            <div id="parentc0f13f3647ffed61d6312b6461664585cd5a4c42" class="timeblock" style="display: block;">
                <strong id="datac0f13f3647ffed61d6312b6461664585cd5a4c42" class="animated">06:20 pm - 07:10 pm</strong>
                <button data-time="c0f13f3647ffed61d6312b6461664585cd5a4c42" class="changethetime btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i></button>
            </div>

            <div id="editc0f13f3647ffed61d6312b6461664585cd5a4c42" class="hideedittime text-center" style="display: none;">
                <input id="inputc0f13f3647ffed61d6312b6461664585cd5a4c42" type="text" class="form-control" value="05:50 pm - 06:40 pm">
                <p></p><button data-save="c0f13f3647ffed61d6312b6461664585cd5a4c42" class="savetime btn btn-block btn-xs btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button><button data-block="c0f13f3647ffed61d6312b6461664585cd5a4c42" class="deleteblock btn btn-block btn-xs btn-warning"><i class="fa fa-ban"></i> Eliminar </button><button class="canceledit btn btn-block btn-xs btn-danger"><i class="fa fa-times"></i> Cancelar
                </button>
            </div>

        </td>
        <td class="td-line">
            <div id="mp04601" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp04601" data-row="mp04601" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp04602" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp04602" data-row="mp04602" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp04603" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp04603" data-row="mp04603" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp04604" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp04604" data-row="mp04604" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp04605" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp04605" data-row="mp04605" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>
    </tr>
    <tr id="tr9df7f500766c191354453a839f6b5927bdc8c1d3">

        <td class="td-time">

            <div id="parent9df7f500766c191354453a839f6b5927bdc8c1d3" class="timeblock" style="display: block;">
                <strong id="data9df7f500766c191354453a839f6b5927bdc8c1d3" class="animated">07:10 pm - 08:00 pm</strong>
                <button data-time="9df7f500766c191354453a839f6b5927bdc8c1d3" class="changethetime btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i></button>
            </div>

            <div id="edit9df7f500766c191354453a839f6b5927bdc8c1d3" class="hideedittime text-center" style="display: none;">
                <input id="input9df7f500766c191354453a839f6b5927bdc8c1d3" type="text" class="form-control" value="06:40 pm - 07:30 pm">
                <p></p><button data-save="9df7f500766c191354453a839f6b5927bdc8c1d3" class="savetime btn btn-block btn-xs btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button><button data-block="9df7f500766c191354453a839f6b5927bdc8c1d3" class="deleteblock btn btn-block btn-xs btn-warning"><i class="fa fa-ban"></i> Eliminar </button><button class="canceledit btn btn-block btn-xs btn-danger"><i class="fa fa-times"></i> Cancelar
                </button>
            </div>

        </td>
        <td class="td-line">
            <div id="mp03701" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp03701" data-row="mp03701" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp03702" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp03702" data-row="mp03702" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp03703" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp03703" data-row="mp03703" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp03704" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp03704" data-row="mp03704" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp03705" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp03705" data-row="mp03705" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>
    </tr>
    <tr id="tr4fadf67f4ea2ed00cf2af159c773bd0fdf6752e7">

        <td class="td-time">

            <div id="parent4fadf67f4ea2ed00cf2af159c773bd0fdf6752e7" class="timeblock" style="display: block;">
                <strong id="data4fadf67f4ea2ed00cf2af159c773bd0fdf6752e7" class="animated">08:00 pm - 08:50 pm</strong>
                <button data-time="4fadf67f4ea2ed00cf2af159c773bd0fdf6752e7" class="changethetime btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i></button>
            </div>

            <div id="edit4fadf67f4ea2ed00cf2af159c773bd0fdf6752e7" class="hideedittime text-center" style="display: none;">
                <input id="input4fadf67f4ea2ed00cf2af159c773bd0fdf6752e7" type="text" class="form-control" value="07:30 pm - 08:20 pm">
                <p></p><button data-save="4fadf67f4ea2ed00cf2af159c773bd0fdf6752e7" class="savetime btn btn-block btn-xs btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button><button data-block="4fadf67f4ea2ed00cf2af159c773bd0fdf6752e7" class="deleteblock btn btn-block btn-xs btn-warning"><i class="fa fa-ban"></i> Eliminar </button><button class="canceledit btn btn-block btn-xs btn-danger"><i class="fa fa-times"></i> Cancelar
                </button>
            </div>

        </td>
        <td class="td-line">
            <div id="mp02801" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp02801" data-row="mp02801" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp02802" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp02802" data-row="mp02802" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp02803" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp02803" data-row="mp02803" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp02804" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp02804" data-row="mp02804" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp02805" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp02805" data-row="mp02805" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>
    </tr>
    <tr id="tr3bfbf4d2f2554eb71447865aa1da948aba07435c">

        <td class="td-time">

            <div id="parent3bfbf4d2f2554eb71447865aa1da948aba07435c" class="timeblock" style="display: block;">
                <strong id="data3bfbf4d2f2554eb71447865aa1da948aba07435c" class="animated">08:50 pm - 09:40 pm</strong>
                <button data-time="3bfbf4d2f2554eb71447865aa1da948aba07435c" class="changethetime btn btn-primary btn-xs pull-right"><i class="fa fa-pencil"></i></button>
            </div>

            <div id="edit3bfbf4d2f2554eb71447865aa1da948aba07435c" class="hideedittime text-center" style="display: none;">
                <input id="input3bfbf4d2f2554eb71447865aa1da948aba07435c" type="text" class="form-control" value="08:20 pm - 09:10 pm">
                <p></p><button data-save="3bfbf4d2f2554eb71447865aa1da948aba07435c" class="savetime btn btn-block btn-xs btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button><button data-block="3bfbf4d2f2554eb71447865aa1da948aba07435c" class="deleteblock btn btn-block btn-xs btn-warning"><i class="fa fa-ban"></i> Eliminar </button><button class="canceledit btn btn-block btn-xs btn-danger"><i class="fa fa-times"></i> Cancelar
                </button>
            </div>

        </td>
        <td class="td-line">
            <div id="mp01901" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp01901" data-row="mp01901" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp01902" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp01902" data-row="mp01902" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp01903" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp01903" data-row="mp01903" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp01904" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp01904" data-row="mp01904" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>

        <td class="td-line">
            <div id="mp01905" class="col-sm-12 nopadding"></div>
            <div class="col-sm-12 text-center">
                <button id="edit-mp01905" data-row="mp01905" class="addinfo btn btn-xs btn-primary" style="display: none;"><i class="fa fa-plus"></i></button>
            </div>
        </td>
    </tr>
</tbody></table>
<input type="hidden" id="nombreinput" value="' . $_POST['nombre'] . '">

<button class="guardarhorario btn btn-lg btn-warning pull-right"><i class="fa fa-floppy-o"></i> Guardar</button>

';


    #--------------------------------------------------------------------------------------------------
  } elseif ($process == 2) {
    #--------------------------------------------------------------------------------------------------

    if (empty($_POST['nombre']) || empty($_POST['horario']) || empty($_POST['descripcion']) || empty($_POST['materia'])) {
      exit();
    }
    if (ctype_space($_POST['nombre']) || ctype_space($_POST['horario']) || ctype_space($_POST['descripcion']) || ctype_space($_POST['materia'])) {
      exit();
    }

    $fecha = date('Y-m-d');
    $data = $_POST['horario'];
    $nombre = $_POST['nombre'];
    $materia = $_POST['materia'];
    $descripcion = $_POST['descripcion'];

    $SQL = 'INSERT INTO horarios (nombre, descripcion, materia, horario, fecha) VALUES (:nombre, :descripcion,:materia, :horario, :fecha);';
    $sentence = $conexion->prepare($SQL);
    $sentence->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $sentence->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
    $sentence->bindParam(':materia', $materia, PDO::PARAM_STR);
    $sentence->bindParam(':horario', $data, PDO::PARAM_STR);
    $sentence->bindParam(':fecha', $fecha, PDO::PARAM_STR);
    $sentence->execute();


    #--------------------------------------------------------------------------------------------------
  } elseif ($process == 3) {


    $SQL = 'SELECT * FROM horarios WHERE id = :id LIMIT 1';
    $sentence = $conexion->prepare($SQL);
    $sentence->bindParam(':id', $_POST['data'], PDO::PARAM_INT);
    $sentence->execute();
    $resultados = $sentence->fetchAll();
    if (empty($resultados)) {
    } else {
      foreach ($resultados as $key) {
        echo '
<div class="modal fade" id="ViewHorario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div id="modalblue" class="modal-body">
        <div id="edithorariotabledata">
        ' . $key['horario'] . '
        </div>
        <input type="hidden" id="inputidedit" value="' . $key['id'] . '" >
      </div>
    </div>
  </div>
</div>
   ';
      }
    }
  }
  #--------------------------------------------------------------------------------------------------
  elseif ($process == 4) {


    if (empty($_POST['nombre']) || empty($_POST['horario']) || empty($_POST['descripcion']) || empty($_POST['materia'])) {
      exit();
    }
    if (ctype_space($_POST['nombre']) || ctype_space($_POST['horario']) || ctype_space($_POST['descripcion']) || ctype_space($_POST['materia'])) {
      exit();
    }

    $data = $_POST['horario'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $materia = $_POST['materia'];
    $iddata = $_POST['id'];

    $SQL = 'UPDATE horarios SET nombre =:nombre, descripcion = :descripcion, materia =:materia, horario = :horario WHERE id = :id';
    $sentence = $conexion->prepare($SQL);
    $sentence->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $sentence->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
    $sentence->bindParam(':materia', $materia, PDO::PARAM_STR);
    $sentence->bindParam(':horario', $data, PDO::PARAM_STR);
    $sentence->bindParam(':id', $iddata, PDO::PARAM_INT);
    $sentence->execute();
  }
  #--------------------------------------------------------------------------------------------------
  elseif ($process == 5) {


    if (empty($_POST['dataid'])) {
      exit();
    }
    if (ctype_space($_POST['dataid'])) {
      exit();
    }

    $SQL = 'DELETE FROM horarios WHERE id = :id';
    $sentence = $conexion->prepare($SQL);
    $sentence->bindParam(':id', $_POST['dataid'], PDO::PARAM_INT);
    $sentence->execute();
  }
  #--------------------------------------------------------------------------------------------------

  #--------------------------------------------------------------------------------------------------
}

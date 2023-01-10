<?php

require_once 'include/config.php';
require_once 'include/functions.php';

if (empty($_GET['horario'])) {
  header('Location: lista.php');
}

if (ctype_space($_GET['horario'])) {
  header('Location: lista.php');
}

if (is_numeric($_GET['horario'])) {
  $horario = $_GET['horario'];
} else {
  header('Location: lista.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Horarios</title>

  <!-- Bootstrap -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
      <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="../public/css/custom.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


  <div class="original">
    <?php printhorario($horario); ?>
  </div>

  <div id="finalcanvas"></div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../public/js/jquery-3.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Canvas -->
  <script type="text/javascript" src="js/html2canvas.js"></script>
  <script type="text/javascript">
    html2canvas($(".original"), {
      onrendered: function(canvas) {
        // document.body.appendChild(canvas);
        var canvasImg = canvas.toDataURL("image/png");

        $('#finalcanvas').html('<img src="' + canvasImg + '" alt="">');

      },
      allowTaint: true,
      logging: true,
      useCORS: true
    });
    $('.original').hide();
  </script>
</body>

</html>
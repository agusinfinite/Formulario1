<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilo.css" media="screen" title="no title">
  </head>
  <body>
   
    <div class="contenedor">
      <h1>Datos Generales del Producto</h1>
      <hr>

      <?php $resultado = $_POST;?>
      <?php $nombre = $resultado['nombre'];    ?>
      <?php $precio = $resultado['precio']; ?>
      <?php
          // validar inputs
          if(! (filter_has_var(INPUT_POST, 'nombre') &&
                (strlen(filter_input(INPUT_POST,'nombre')) > 0))) {
            echo "El nombre es obligatorio";
          } else {    ?>
              <p>Nombre: <?php echo $nombre; ?></p>
          <?php } ?>


          <?php if(!isset($precio) || trim($precio) != '') { ?>
            <p>Precio: <?php echo $precio; ?></p>
          <?php } else {
            echo "El precio es obligatorio";
      }  ?>
<hr>
<h2>Tama&ntilde;o de porci&oacute;n </h2>
       <?php //validar array de checkboxes ?>
       <?php if(isset($_POST['tam'])) {
         $porcion = $_POST['tam'];
         echo "Tamaño de porcion existente(s) <br>";
         foreach($porcion as $tam) {
           echo $tam.'</br>';
         }
       } else {
         echo "No elegiste tamaño de porcion";
       } ?>
<hr>
       <?php // validar radio buttons ?>
       <?php  $opciones = array(
        'ent' => 'Entrada',
        'sop' => 'Sopa/ensalada',
        'pri' => 'Plato principal',
        'pos' => 'Postre',
        'beb' => 'Bebida'
       );?>

       <h2>Tipo de Secci&oacute;n</h2>
       <?php if(array_key_exists($_POST['opciones'], $opciones)) {
         $sección_menu = $_POST['opciones'];
         switch ($sección_menu) {
           case 'ent':
               echo "Secci&oacute;n de Entradas";
               break;
           case 'sop':
              echo "Secci&oacute;n de Sopas/Ensaladas";
              break;
           case 'pri':
             echo "Secci&oacute;n de Platos Principales";
              break;
           case 'pos':
              echo "Secci&oacute;n de Postres";
              break;
           case 'beb':
             echo "Secci&oacute;n de Bebidas";
             
         }
       } else {
             echo "No elegiste ninguna secci&oacute;n";
       } ?>
<hr>
       <?php // validando textarea ?>
       <h2>Descripci&oacute;n del Producto</h2>
       <?php if(isset($_POST['mensaje'])) {
         $mensaje = $_POST['mensaje'];
         $nuevo_mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
         if(strlen($nuevo_mensaje) > 0 &&  trim($nuevo_mensaje)) {
           echo  $nuevo_mensaje;
         } else {
           echo "el mensaje esta vacio";
         }
       } ?>
    </div>
  </body>
</html>

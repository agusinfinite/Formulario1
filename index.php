<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Restaurante</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilo.css" media="screen" title="no title">
  </head>
  <body>
  <div class="contenedor">
  <h1>A&ntilde;adir Producto</h1>
  <div class="contenido">
          <form class="" action="restaurante.php" method="post">
              <div class="seccion_menu">
                  <h2>Secci&oacute;n de men&uacute;</h2>
                  <?php  $opciones = array(
                      'ent' => 'Entrada',
                      'sop' => 'Sopa/ensalada',
                      'pri' => 'Plato principal',
                      'pos' => 'Postre',
                      'beb' => 'Bebida'
                  );?>
                <?php foreach($opciones as $key => $opcion) {
                    echo "<div class='campo'>";
                    echo "<input type='radio' name='opciones' value='$key' > $opcion";
                    echo "</div>";
                  } ?>
            </div>
            <div class="porcion">
                 <h2>Tama&ntilde;o de porci&oacute;n</h2>
                            <div class="campo">
                                <label for="grande">Grande
                                    <input type="checkbox" name="tam[]" value="grande" id="grande">
                                </label>
                </div>
                            <div class="campo">
                                <label for="normal">Normal
                                    <input type="checkbox" name="tam[]" value="normal" id="normal">
                                </label>
                </div>
                            
                            <div class="campo">
                                <label for="chico">Chico
                                    <input type="checkbox" name="tam[]" value="chico" id="chico">
                                </label>
                            
                  </div>
                  </div>    
            <div class="informacion">
                <h2>Informaci&oacute;n General</h2>
                      <label for="nombre">Nombre:
                          <input type="text" name="nombre" id="nombre">
                      </label>
                  </div>
                  <div class="campo">
                      <label for="precio">Precio:
                          <input type="text" name="precio" id="precio">
                      </label>
                  </div>

    <div class="textardea">
        <div class="campo">
                    <label for="mensaje"> Descripción:  <br/>
                        <textarea name="mensaje" rows="8" cols="40" id="mensaje"></textarea>
                    </label>
                    <input type="submit">
                  </div>
            </div>
            
</form>
</div>
</body>
</html>
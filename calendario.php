<?php

  include_once 'includes/templates/header.php';

?>

  <section class="seccion contenedor">
    <h2>Calendario Invitados </h2>
    <?php

      try {
        require_once('includes/funciones/conexion.php');

        $sql = " SELECT id_evento, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
        $sql .= " FROM eventos ";
        $sql .= " INNER JOIN categoria_evento ";
        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
        $sql .= " INNER JOIN invitados ";
        $sql .= " ON eventos.id_invitado = invitados.id_invitado ";
        $sql .= " ORDER BY fecha_evento";



        $resultado = $conn->query($sql);

      } catch (\Exception $e) {
        echo $e->getMessage();
      }


    ?>
    <div class="calendario">
      <?php

          $calendario = array();

          while($eventos = $resultado->fetch_assoc()){


            $fecha = $eventos['fecha_evento'];  //Obtiene la fecha del evento de tal manera que luego podemos ponerla en el arreglo $calendario para agruparlos por fecha

            $evento = array(
              'titulo' => $eventos['nombre_evento'],
              'fecha' => $eventos['fecha_evento'],
              'hora' => $eventos['hora_evento'],
              'categoria' => $eventos['cat_evento'],
              'icono' => 'fas ' . $eventos['icono'],
              'nombre' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']

            );

            $calendario[$fecha][] = $evento;

      ?>

      <?php } ?>

      <?php

        //Recorriendo el arreglo

        foreach($calendario as $dia => $lista_eventos){?>
          <h3 class="dia_eventos">

            <i class="fa fa-calendar"></i>
            <?php
              setlocale( LC_TIME, 'es_ES.UTF-8');

              echo strftime("%A, %d de %B del %Y", strtotime($dia) );

            ?>
          </h3>
          <div class="contenido_dia">
            <?php foreach($lista_eventos as $evento){ ?>
                <div class="dia">
                  <p class="titulo"> <?php echo $evento["titulo"]; ?> </p>
                  <p class="hora">
                    <i class="fas fa-clock" aria-hidden="true"></i>
                    <?php echo $evento["fecha"] . " " . $evento['hora']; ?>
                  </p>
                  <p>
                    <i class="<?php echo $evento['icono']; ?>" aria-hidden="true"></i>
                    <?php echo $evento["categoria"]; ?>
                  </p>
                  <p>
                    <i class="fas fa-user" aria-hidden="true"></i>
                    <?php echo $evento['nombre'];?>
                  </p>

                </div>

            <?php } //Fin foreach eventos ?>
          </div>

      <?php } //Fin foreach Dia?>

    <?php

      $conn->close();

    ?>

  </section>
<?php

  include_once 'includes/templates/footer.php';

?>

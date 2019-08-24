<section class="seccion contenedor">
    <h2> Nuestros Invitados </h2>
    <?php

      try {
        require_once('includes/funciones/conexion.php');

        $sql = " SELECT * FROM `invitados` ";

        $resultado = $conn->query($sql);

      } catch (\Exception $e) {
        echo $e->getMessage();
      }


    ?>
    <div class="calendario">
      <div class="invitados-contenedor">
        <?php while($invitados = $resultado->fetch_assoc()) {?>

            <div class="invitado">
              <a class="inline" href="#invitado<?php echo $invitados['id_invitado'];?>">
                  <img src="img/<?php echo $invitados['url_img']; ?>" alt="invitado">
                  <p><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado']; ?></p>
              </a>
            </div><!--invitado-->

              <div style="display:none;">
                  <div class="inline" id="invitado<?php echo $invitados['id_invitado'];?>">
                      <h2><?php echo $invitados['nombre_invitado'] . ' ' . $invitados['apellido_invitado']; ?></h2>
                      <img src="img/<?php echo $invitados['url_img']; ?>" alt="invitado">

                      <p> <?php echo $invitados['descripcion']; ?></p>

                  </div><!--info-invitados-->
              </div>


        <?php } /*Fin del while */ ?>
      </div><!--invitados-contenedor-->

    </div>
    <?php

      $conn->close();

    ?>

  </section>

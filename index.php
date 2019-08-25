<?php

  include_once 'includes/templates/header.php';

?>

  <section class="seccion contenedor">
    <h2>La mejor conderencia de diseño web en español </h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, harumLorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, harum? Cum quisquam atque, eligendi incidunt quis odio exercitationem impedit totam ex commodi a libero autem, deleniti pariatur illum? Error, impedit?</p>
  </section>

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">

          <source src="video/video.mp4" type="video/mp4">
          <source src="video/video.webm" type="video/webm">
          <source src="video/video.ogv" type="video/ogg">
      </video>
    </div> <!--Contenedor Video -->

    <div class="contenido-programa">
    <?php

      try {
        require_once('includes/funciones/conexion.php');

        $sql = " SELECT * FROM `categoria_evento` ";

        $resultado = $conn->query($sql);

      } catch (\Exception $e) {
        echo $e->getMessage();
      }
    ?>
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>
          <nav class="menu-programa">
            <?php while($invitados = $resultado->fetch_assoc()) {?>
                <a href="#<?php echo strtolower($invitados['cat_evento']);?>"><i class="fas <?php echo $invitados['icono'];?>"></i><?php echo $invitados['cat_evento']; ?></a>
            <?php } ?>
          </nav>

          <?php

            try {
              require_once('includes/funciones/conexion.php');

              $sql = " ";
              $sql .= " SELECT id_evento, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
              $sql .= " FROM eventos ";
              $sql .= " INNER JOIN categoria_evento ";
              $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
              $sql .= " INNER JOIN invitados ";
              $sql .= " ON eventos.id_invitado = invitados.id_invitado ";
              $sql .= " AND eventos.id_cat_evento = 1 ";
              $sql .= " ORDER BY fecha_evento LIMIT 2;";

              $sql .= " SELECT id_evento, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
              $sql .= " FROM eventos ";
              $sql .= " INNER JOIN categoria_evento ";
              $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
              $sql .= " INNER JOIN invitados ";
              $sql .= " ON eventos.id_invitado = invitados.id_invitado ";
              $sql .= " AND eventos.id_cat_evento = 2 ";
              $sql .= " ORDER BY fecha_evento LIMIT 2;";

              $sql .= " SELECT id_evento, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
              $sql .= " FROM eventos ";
              $sql .= " INNER JOIN categoria_evento ";
              $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
              $sql .= " INNER JOIN invitados ";
              $sql .= " ON eventos.id_invitado = invitados.id_invitado ";
              $sql .= " AND eventos.id_cat_evento = 3 ";
              $sql .= " ORDER BY fecha_evento LIMIT 2;";

            } catch (\Exception $e) {
              echo $e->getMessage();
            }


          ?>
          <?php $conn->multi_query($sql); ?>

          <?php
            do{
              $resultado = $conn->store_result();
              $row = $resultado->fetch_all(MYSQLI_ASSOC);

              $i=0;
              foreach($row as $evento):
              ?>
                <?php if($i % 2 == 0){ ?>
                  <div id="<?php echo strtolower($evento['cat_evento']); ?>" class="info-cursos ocultar clearfix">
                <?php } ?>
                <div class="detalle-evento">
                  <h3><?php echo $evento['nombre_evento']; ?></h3>

                  <p><i class="fas fa-clock"></i><?php echo $evento['hora_evento']; ?></p>
                  <p><i class="fas fa-calendar"></i><?php echo $evento['fecha_evento']; ?></p>
                  <p><i class="fas fa-user"></i><?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado']; ?></p>
                </div><!--Detalle Evento-->

                <?php if($i % 2 == 1){ ?>
                  <a href="calendario.php" class="buttom float-right">Ver todos</a>
                  </div><!--Talleres-->
                <?php } ?>

              <?php
                $i++;
                endforeach;
               ?>
          <?php
            $resultado->free();
            }while($conn->more_results() && $conn->next_result());
          ?>


        </div><!--Programa evento-->
      </div><!--Contenedor-->
    </div><!--Contenido Programa-->
  </section><!--Programa-->


  <section class="seccion">
    <?php

      include_once 'includes/templates/invitados.php';

    ?>
  </section>

  <div class="contador parallax">
    <div class="contenedor">
      <div class="resumen-evento">
        <div class="resumen-numero">
          <p class="numero">0</p> <p>Invitados</p>

        </div>
        <div class="resumen-numero">
          <p class="numero">0</p> <p>Talleres</p>

        </div>
        <div class="resumen-numero">
          <p class="numero">0</p> <p>Días</p>

        </div>
        <div class="resumen-numero">
          <p class="numero">0</p> <p>Conferencias</p>

        </div>
      </div> <!--Resumen Evento-->
    </div> <!--Contenedor-->
  </div> <!--Contador and Parallax-->

  <section class="precios section">
    <h2>Precios</h2>
    <div class="contenedor">
       <div class="lista-precios">

         <div class="tabla-precio">
           <h3>Pase por un día</h3>
           <p class="numero">$30</p>
           <ul>
             <li>Bocadillos Gratis</li>
             <li>Todas las Conferencias</li>
             <li>Todos los Talleres</li>
           </ul>
           <a href="#" class="buttom hollow">Comprar</a>
         </div><!--Tabla precio-->

         <div class="tabla-precio">
          <h3>Todos los días</h3>
          <p class="numero">$50</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las Conferencias</li>
            <li>Todos los Talleres</li>
          </ul>
          <a href="#" class="buttom">Comprar</a>
        </div><!--Tabla precio-->

        <div class="tabla-precio">
          <h3>Pase por 2 días</h3>
          <p class="numero">$40</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las Conferencias</li>
            <li>Todos los Talleres</li>
          </ul>
          <a href="#" class="buttom hollow">Comprar</a>
        </div><!--Tabla precio   <i class="fas fa-check"></i>  -->

       </div> <!--Lista de precios-->
    </div>  <!--Contenedor-->
  </section>  <!--Seccion de precios-->

  <div class="mapa" id="mapa">

  </div>

  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimonial contenedor">
      <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Optio magnam dicta sed incidunt, tempore ab, assumenda
             magni consequuntur dolorum, labore doloremque? Consequatur
          </p>
          <footer>
            <img src="img/testimonial.jpg" alt="imagen testimonial">

            <cite>Oswaldo Aponte Escobedo  <span>Diseñador en @prisma</span></cite>
          </footer>
      </blockquote><!--Testimonial-->

      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Optio magnam dicta sed incidunt, tempore ab, assumenda
            magni consequuntur dolorum, labore doloremque? Consequatur
        </p>
        <footer>
          <img src="img/testimonial.jpg" alt="imagen testimonial">

          <cite>Oswaldo Aponte Escobedo  <span>Diseñador en @prisma</span></cite>
        </footer>
       </blockquote><!--Testimonial-->

      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Optio magnam dicta sed incidunt, tempore ab, assumenda
            magni consequuntur dolorum, labore doloremque? Consequatur
        </p>
        <footer>
          <img src="img/testimonial.jpg" alt="imagen testimonial">

          <cite>Oswaldo Aponte Escobedo  <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote><!--Testimonial-->
    </div><!--Testimonial-->
  </section><!--Seccion del testimonial-->

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Registrate al newsletter</p>
      <h3>GDLWebCamp</h3>
      <a href="#" class="buttom transparente">Registro</a>
    </div>
  </div> <!--Newsletter and parallax-->


  <section class="seccion">
    <h2>Faltan</h2>
    <div class="contenedor">
      <div class="cuenta-regresiva">
        <div class="numero">
          <p id="dias"></p> <span>Días</span>
        </div>
        <div class="numero">
          <p id="horas"></p> <span>Horas</span>
        </div>
        <div class="numero">
          <p id="minutos"></p> <span>Minutos</span>
        </div>
        <div class="numero">
          <p id="segundos"></p> <span>Segundos</span>
        </div>
      </div>

    </div>
  </section>
<?php

  include_once 'includes/templates/footer.php';

?>

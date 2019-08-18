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
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>
          <nav class="menu-programa">
            <a href="#talleres" class="activo"><i class="fas fa-code"></i>Talleres</a>
            <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
            <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
          </nav>
          <div id="talleres" class="info-cursos ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS3, JavaScript</h3>
              <p><i class="fas fa-clock"></i>16:00 hrs</p>
              <p><i class="fas fa-calendar"></i>10 de Dic</p>
              <p><i class="fas fa-user"></i>José Eduardo Vazquez Cortez</p>
            </div><!--Detalle Evento-->
            <div class="detalle-evento">
              <h3>Git y sus ventajas</h3>
              <p><i class="fas fa-clock"></i>21:00 hrs</p>
              <p><i class="fas fa-calendar"></i>10 de Dic</p>
              <p><i class="fas fa-user"></i>Kevin Isrrael Molina Villanueva</p>
            </div><!--Detalle Evento-->
            <a href="#" class="buttom float-right">Ver todos</a>
          </div><!--Talleres-->

          <div id="conferencias" class="info-cursos ocultar clearfix">
            <div class="detalle-evento">
              <h3>Como ser FreeLancer</h3>
              <p><i class="fas fa-clock"></i>10:00 hrs</p>
              <p><i class="fas fa-calendar"></i>10 de Dic</p>
              <p><i class="fas fa-user"></i>Rick Sanchez</p>
            </div><!--Detalle Evento-->
            <div class="detalle-evento">
              <h3>Como reparar todo con arroz</h3>
              <p><i class="fas fa-clock"></i>19:00 hrs</p>
              <p><i class="fas fa-calendar"></i>10 de Dic</p>
              <p><i class="fas fa-user"></i>Felipe Rodrigez</p>
            </div><!--Detalle Evento-->
            <a href="#" class="buttom float-right">Ver todos</a>
          </div><!--Talleres-->

          <div id="seminarios" class="info-cursos ocultar clearfix">
            <div class="detalle-evento">
              <h3>Diseño de UI/UX para mobiles</h3>
              <p><i class="fas fa-clock"></i>18:00 hrs</p>
              <p><i class="fas fa-calendar"></i>10 de Dic</p>
              <p><i class="fas fa-user"></i>Enrique Garcia</p>
            </div><!--Detalle Evento-->
            <div class="detalle-evento">
              <h3>Como estar listos para el futuro</h3>
              <p><i class="fas fa-clock"></i>23:00 hrs</p>
              <p><i class="fas fa-calendar"></i>10 de Dic</p>
              <p><i class="fas fa-user"></i>Helsinki D'Vorak</p>
            </div><!--Detalle Evento-->
            <a href="#" class="buttom float-right">Ver todos</a>
          </div><!--Talleres-->


        </div><!--Programa evento-->
      </div><!--Contenedor-->
    </div><!--Contenido Programa-->
  </section><!--Programa-->


  <section class="contenedor seccion">
    <h2>Nuestros Invitados</h2>
    <div class="invitados">
      <div class="invitado">
        <img src="img/invitado1.jpg" alt="invitado">
        <p><span>R</span>afael <span>B</span>autista</p>
      </div>
      <div class="invitado">
        <img src="img/invitado2.jpg" alt="invitado">
        <p><span>R</span>osa <span>J</span>imenez</p>
      </div>
      <div class="invitado">
        <img src="img/invitado3.jpg" alt="invitado">
        <p><span>J</span>ose <span>V</span>azquez</p>
      </div>
      <div class="invitado">
        <img src="img/invitado4.jpg" alt="invitado">
        <p><span>J</span>uana <span>M</span>endez</p>
      </div>
      <div class="invitado">
        <img src="img/invitado5.jpg" alt="invitado">
        <p><span>R</span>afael <span>B</span>autista</p>
      </div>
      <div class="invitado">
        <img src="img/invitado6.jpg" alt="invitado">
        <p><span>G</span>eorgina <span>N</span>ulpa</p>
      </div>
    </div><!--Invitados-->
  </section>
  <div class="contador parallax">
    <div class="contenedor">
      <div class="resumen-evento">
        <div class="resumen-numero">
          <p class="numero"></p> <p>Invitados</p>

        </div>
        <div class="resumen-numero">
          <p class="numero"></p> <p>Talleres</p>

        </div>
        <div class="resumen-numero">
          <p class="numero"></p> <p>Días</p>

        </div>
        <div class="resumen-numero">
          <p class="numero"></p> <p>Conferencias</p>

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

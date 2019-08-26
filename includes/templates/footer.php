
  <footer class="site-footer">
    <div class="contenedor contenido-footer">
      <div class="footer-informacion">
        <h3>Sobre <span>Nosotros</span></h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, omnis officiis ipsum earum nisi, delectus deleniti aliquid nihil nostrum maiores consequatur libero totam veritatis voluptates magnam, amet architecto praesentium? Autem.
        </p>
      </div>

      <div class="ultimos-tweets">
          <h3>Ultimos <span>Tweets</span></h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, omnis officiis</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, omnis officiis</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, omnis officiis</p>
      </div>

      <div class="menu">
          <h3>Redes <span>Sociales</span></h3>
          <nav class="redes-sociales">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-pinterest"></i></a>
            </nav>
      </div>
    </div>
    <p class="copyright">Todos los derechos reservados GDLCAMP</p>
  </footer>




  <!-- Add your site or application content here -->
  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>

  <script src="js/plugins.js"></script>
  <script src="js/jquery.lettering.js"></script>

  <?php
    $nombre = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace('.php', '', $nombre);
    if($pagina == 'invitados'){
      echo '<script src="js/jquery.colorbox.js"></script>';
    }
    elseif ($pagina == 'conferencia') {
      echo '<script src="js/lightbox-plus-jquery.min.js"></script>';
    }
    elseif ($pagina == 'index'){
      echo '<script src="js/jquery.waypoints.min.js"></script>';
      echo '<script src="js/jquery.animateNumber.js"></script>';
      echo '<script src="js/jquery.countdown.min.js"></script>';
      echo '<script src="js/jquery.colorbox.js"></script>';
    }
  ?>

  <script src="js/waypoint.js"></script>
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
  <script src="js/header.js"></script>


  <script src="js/main.js"></script>



  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us3.list-manage.com","uuid":"5e639bc9e133cf15e3a284539","lid":"e5a3e7144b","uniqueMethods":true}) })</script>

</body>

</html>

<?php if(isset($_POST['submit'])):
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $email = $_POST['email'];
      $regalo = $_POST['regalo'];
      $total = $_POST['total_pedido'];
      $fecha = date('Y-m-d H:i:s');
      //Pedidos
      $boletos = $_POST['boletos'];
      $camisas = $_POST['pedido_camisas'];
      $etiquetas = $_POST['pedido_etiquetas'];
      include_once 'includes/funciones/funciones.php';
      $pedido =  productos_json($boletos, $camisas, $etiquetas);
      $eventos = $_POST['registro'];
      $registro = eventos_json($eventos);
      try {
        require_once('includes/funciones/conexion.php');
        $stmt = $conn->prepare("INSERT INTO registrados(nombre_registro, apellido_registro, email_registro, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?) ");
        $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header('Location: validar_registro.php?exitoso=1');
      } catch (Exception $e) {
        $error = $e->getMessage();
      }
      endif;
    ?>
<?php

  include_once 'includes/templates/header.php';

?>
<section class="contenedor seccion">
  <h2>Resumen Registro</h2>

  <?php if(isset($_GET['exitoso'])){
    if($_GET['exitoso'] == "1"){
      echo '<p class="exitoso">Registro Exitoso </p>';
    }
  } ?>


</section>
<?php

  include_once 'includes/templates/footer.php';

?>

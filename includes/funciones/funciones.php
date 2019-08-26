<?php
  function productos_json(&$boletos, &$camisas= 0, &$etiquetas= 0){   //Funcion que añade los tres campos en un arreglo y luego lo vuelve un json
    $llaves = array(0 => 'un_dia', 1 =>'todos_los_dias', 2 =>'dos_dias');

    $total_boletos = array_combine($llaves,$boletos);
    $json= array();


    foreach($total_boletos as $key => $boletos):
      if( (int)$boletos >0){ //Se convierte en int para hacer mas facil el manejo de la evalución
        $json[$key] = (int)$boletos;
      }
    endforeach;
    $camisas = (int) $camisas;
    if($camisas > 0){
      $json['camisas'] = $camisas;
    }

    $etiquetas = (int) $etiquetas;
    if($etiquetas > 0){
      $json['etiquetas'] = $etiquetas;
    }

    return json_encode($json);

  }

  function eventos_json(&$eventos){   //Funcion que añade a todos los datos del arreglo evento en un json
    $eventos_json = array();

    foreach($eventos as $evento){
      $eventos_json['eventos'][] = $evento;  //Se usan dobles corchetes debido a que los eventos estaran dentro del mismo arreglo
    }

    return json_encode($eventos_json);
  }


?>

<?php
    $jsonContenido='[
        {"nombre":"Oscar", "apellido":"Uh"},
        {"nombre":"José", "apellido":"Pérez"}
    ]';
    $resultado=json_decode($jsonContenido);
    //print_r($resultado);
    foreach($resultado as $persona){
        echo ($persona->nombre)." ".($persona->apellido)."<br/>";
    }
?>
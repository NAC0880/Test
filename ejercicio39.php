<?php
    $nombreArchivo="archivo.txt";
    $contenidoArchivo="Hola, saludos";
    $archivoACrear=fopen($nombreArchivo, "w"); // Para crear un archivo se tiene que abrir uno inexistente en modo escritura, "w"=modo escritura
    fwrite($archivoACrear, $contenidoArchivo);
    fclose($archivoACrear);
?>
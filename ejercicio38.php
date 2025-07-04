<?php
    // Abrir un archivo para leer el contenido
    $archivo="contenido.txt"; // Si estuviera con una ruta especial porner toda la ruta
    $archivoAbierto=fopen($archivo,"r"); // "r"=read onlly
    $contenido=fread($archivoAbierto,filesize($archivo)); // fread=leer archivo
    echo $contenido;
?>
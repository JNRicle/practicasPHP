<?php

    /*
        comprobar si una variable esta vacia y si 
        esta vacia rellenarla con texto en minusculas y mostrarlo en mayusculas y
        en negrita
    */

    $cadena = "";

    if(empty($cadena)){
        $cadena = "hola soy el nuevo relleno";
    }

    $texto_mayus = strtoupper($cadena);

    echo '<strong>'.$texto_mayus.'</strong>';

?>
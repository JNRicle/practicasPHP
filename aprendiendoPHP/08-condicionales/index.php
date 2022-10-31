<?php

    $color = 'verde';

    //condicional if

    if($color == 'verde'){
        echo 'el color es verde';
    }else{
        echo 'el color no es verde';
    }

    echo '<br>';

    //operadores de comparacion

    /*
        ==
        ===
        !=
        <
        >
        >=
        <=

    */

    $year = 2020;

    if($year < 2022){
        echo 'es un año anterior a 2022';
    }else{
        echo 'es un año futuro a 2022';
    }

    echo '<br>';

    $mayoria_de_edad = 18;
    $edad = 25;
    $nombre = 'Joaquin Ricle';
    $ciudad = 'Diamante';

    if($edad >= $mayoria_de_edad){
        echo $nombre.' es mayor de edad y es de '.$ciudad;
    }else{
        echo 'es menor de edad';
    }

    echo '<br>';

    $dia = 3;

    if($dia == 1){
        echo 'lunes';
    }else if($dia == 2){
        echo 'martes';
    }else if($dia == 3){
        echo 'miercoles';
    }else if($dia == 4){
        echo 'jueves';
    }else if($dia == 5){
        echo 'viernes';
    }else{
        echo 'no es un dia laboral';
    }

    echo '<br>';

    $edad1 = 18;
    $edad2 = 60;
    $edad_oficial = 25;

    if($edad1 <= $edad_oficial && $edad2 >= $edad_oficial){
        echo 'esta en la edad para trabajar';
    }else{
        echo 'no esta en la edad para trabajar';
    }

    echo '<br>';

    $pais = 'francia';

    if($pais == 'españa' || $pais == 'argentina' || $pais == 'mexico'){
        echo 'aqui se habla español';
    }else{
        echo 'aqui no se habla español';
    }

    echo '<br>';

    switch($dia){
        case 1:
            echo 'lunes';
        break;
        case 2:
            echo 'martes';
        break;
        case 3:
            echo 'miercoles';
        break;
        case 4:
            echo 'jueves';
        break;
        case 5:
            echo 'viernes';
        break;
        default:
            echo 'no es dia laboral';
        break;
    }

    //GOTO

    goto marca;

    echo '<h3>Intruccion 1</h3>';
    echo '<h3>Intruccion 2</h3>';
    echo '<h3>Intruccion 3</h3>';
    echo '<h3>Intruccion 4</h3>';

    marca:
    echo 'me he saltado 4 echos';

?>
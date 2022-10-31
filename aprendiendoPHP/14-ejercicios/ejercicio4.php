<?php

    /*
        crear un scrip que tenga 4 variables, una de tipo array, otra de 
        tipo string otra int, otra booleana y que imprima un mensaje segun 
        el tipo de variable que sea
    */

    $matriz = ['hola mundo',99];
    $titulo = 'bienvenido a mi curso';
    $numero = 55;
    $estado = false;

    if(is_array($matriz)){
        echo 'es una matriz';
    }

    if(is_string($titulo)){
        echo 'es un string';
    }

    if(is_integer($numero)){
        echo 'es un entero';
    }

    if(is_bool($estado)){
        echo 'es un booleano';
    }

?>
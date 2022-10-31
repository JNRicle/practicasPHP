<?php

    function buenosDias(){

        return 'hola buenos dias!';
    }

    function devolverSaludo(){

        return 'buenos dias para ti tambien!';
    }

    function despedida(){

        return 'nos vemos luego!';
    }

    $horario = $_GET['horario'];

    $mi_funcion = 'buenos'.$horario;

    echo $mi_funcion();

?>
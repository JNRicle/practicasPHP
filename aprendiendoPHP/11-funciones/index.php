<?php
/*
    function mostrarNombres(){
        echo 'Joaquin Nicolas Ricle<br>';
        echo 'Pedro Jose Ricle<br>';
        echo 'Marta Rita Garcilazo<br>';
        echo 'Betsabe Maria Victoria Ricle<br>';
        echo 'Maria Del Rosario<br>';
        echo 'Amilcar Leonel Ricle<br>';
    }

    mostrarNombres();

    function tablaMultiplicar($numero){

        for($i = 0; $i <= 10; $i++){
            echo '<h2>' . $numero . ' x ' . $i . ' = ' . ($numero * $i) . '</h2><br>';
        }

    }

    tablaMultiplicar(6);
    if(isset($_GET['numero'])){
        tablaMultiplicar($_GET['numero']);
    }else{
        echo 'error';
    }

    for($i = 0; $i <= 10; $i++){
        tablaMultiplicar($i);
    }
*/
    function calculadora($numero1,$numero2,$negrita = false){

        $cadena_texto = "";

        if($negrita != false){
            $cadena_texto .= '<h1>';
        }

        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $division = $numero1 / $numero2;
        $multiplicasion = $numero1 * $numero2;
        $resto = $numero1 % $numero2;

        $cadena_texto .= "Suma: $suma<br>";
        $cadena_texto .= "Resta: $resta<br>";
        $cadena_texto .= "Division: $division<br>";
        $cadena_texto .= "Multiplicasion: $multiplicasion<br>";
        $cadena_texto .= "Resto: $resto<br>";

        if($negrita != false){
            $cadena_texto .= '</h1>';
        }

        return $cadena_texto;
    }

    echo calculadora(15,7,true);

    function getNombre($nombre){

        return $nombre;
    }

    function getApellido($apellido){

        return $apellido;
    }

    function nombreCompleto($nombre,$apellido){

        $cadena_texto = "";

        $cadena_texto .= getNombre($nombre).' '.getApellido($apellido).'<br>';

        return $cadena_texto;
    }

    echo nombreCompleto('Joaquin Nicolas','Ricle');

?>
<?php

    //hacer un programa en php que tenga un array con 8 numeros enteros y que haga lo siguiente:
    //1-recorrerlo y mostrarlo
    //2-ordenar y mostrarlo
    //3-mostrar su longitud
    //4-buscar un elemento

    function mostrar_contenido($vector){

        $resultado = "";

        foreach($vector as $valor){
            $resultado .= $valor.' ';
        }

        return $resultado;
    }

    $numeros = [4,5,6,2,9,0,1,3];

    echo mostrar_contenido($numeros);

    echo '<hr>';

    sort($numeros);

    echo mostrar_contenido($numeros);

    echo '<hr>';

    echo 'el tamaño del array es: '.sizeof($numeros);

    echo '<hr>';

    if(isset($_GET['numero'])){
        $busqueda = $_GET['numero'];

        $search = array_search($busqueda,$numeros);

        if(!empty($search)){
            echo 'el valor existe en la posicion '.$search.'<br>';
        }else{
            echo 'el valor no existe<br>';
        }

    }

?>
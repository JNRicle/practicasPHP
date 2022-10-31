<?php

    $peliculas = array('batman', 'el señor de los anillos', 'spiderman', 'ironman', 'harry potter');

    var_dump($peliculas);

    echo $peliculas[2];

    for($i = 0; $i < count($peliculas); $i++){

        echo $peliculas[$i].'<br>';

    }

    echo '<hr>';

    foreach($peliculas as $pelicula){
        echo $pelicula.'<br>';
    }

    echo '<hr>';

    $contactos = array(
        array(
            'nombre' => 'luis',
            'contacto' => 'luis@gmail.com'
        ),
        array(
            'nombre' => 'joaquin',
            'contacto' => 'joaquin@gmail.com'
        ),
        array(
            'nombre' => 'pedro',
            'contacto' => 'pedro@gmail.com'
        )
    );

    echo $contactos[2]['contacto'];

    foreach($contactos as $key => $contacto){
        var_dump($contacto['contacto']);
    }

?>
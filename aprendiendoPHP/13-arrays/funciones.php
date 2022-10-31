<?php

    $nombres = ['joaquin', 'laureano', 'axel', 'facundo', 'matias', 'francisco'];

    $nombres [] = 'ariel';

    asort($nombres);

    var_dump($nombres);

    array_push($nombres,'leo');
    array_pop($nombres);
    unset($nombres[3]);

    var_dump($nombres);

    $indice = array_rand($nombres);
    echo $nombres[$indice];


    var_dump(array_reverse($nombres));

    $resultado = array_search('ariel', $nombres);

    var_dump($resultado);

    echo sizeof($nombres);

?>
<?php

    //while

    $cont = 0;

    while($cont < 10){
        echo 'saludos desde la iteracion numero '.$cont.'!<br>';
        $cont++;
    }

    $cont = 0;
    echo '<br>';

    do{
        echo 'saludos desde la iteracion numero '.$cont.'!<br>';
        $cont++;
    }while($cont<10);

    echo '<br>';

    for($i = 0; $i < 10; $i++){
        echo 'oveja numero '.$i.'<br>';
    }

    echo '<br>';

    if(isset($_GET['numero'])){
        $numero = (int)$_GET['numero'];
    }else{
        $numero = 1;
    }

    for($i = 0; $i <= 10; $i++){
        echo $numero . ' x ' . $i . ' = '. $numero*$i.'<br>';
    }

?>
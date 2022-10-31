<?php

    session_start();

    $variable = 'soy una cadena de texto';

    $_SESSION['variable_persistente'] = 'HOLA SOY UNA SESION ACTIVA';

    echo $variable.'<br>';
    echo $_SESSION['variable_persistente'];

?>
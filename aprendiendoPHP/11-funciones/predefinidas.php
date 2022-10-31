<?php

    $saludo = 'hola';

    var_dump($saludo);

    echo date('d-m-Y');
    echo '<br>';

    echo time();

    echo '<br>El cuadrado de '.$_GET['valor'].' es: '.sqrt($_GET['valor']);

    echo '<br> numero aleatorio: '.rand();

    echo '<br> numero pi '.pi();

    echo '<br> redondear '.round(9.68943,3);

    echo '<br>'.gettype($saludo);

    if(isset($saludo)){
        echo '<br>La variable existe';
    }else{
        echo '<br>La variable no existe';
    }

    $texto = '<br>      hola soy cadena de texto     ';

    //borrar espacios al principio y fin

    var_dump(trim($texto));

    //eliminar variables/indices

    unset($texto);

    var_dump($texto);


    //comprobar si una variable esta vacia

    if(empty($saludo)){
        echo '<br>Esta vacia';
    }else{
        echo '<br>tiene contenido';
    }

    //contar caracteres de una cadena

    $cadena = 'buenas tardes hoy se juega';

    echo '<br> '.strlen($cadena);

    //encontrar caracter

    $otro = 'la vida es bella';

    echo '<br>'.strpos($otro,'vida');

    //reemplazar contenido

    $frase = str_replace('vida','comida',$otro);

    echo '<br>'.$frase;

    //mayusculas y minusculas

    echo strtoupper($frase);

    echo strtolower($frase);

?>
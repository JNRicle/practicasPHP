<?php

    if(isset($_GET['numero1']) && isset($_GET['numero2'])){

        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];

        echo '<h2>suma: ' . ($numero1 + $numero2) .'</h2><br>';
        echo '<h2>resta: ' . ($numero1 - $numero2) .'</h2><br>';
        echo '<h2>division: ' . ($numero1 / $numero2) .'</h2><br>';
        echo '<h2>multiplicasion: ' . ($numero1 * $numero2) .'</h2><br>';
        echo '<h2>resto: ' . ($numero1 % $numero2) . '</h2><br>';
    }else{
        echo '<h2>Intriduzca los valores correctamente</h2>';
    }

?>
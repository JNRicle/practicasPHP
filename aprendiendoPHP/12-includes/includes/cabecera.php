<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="urf-8"/>
        <title>Includes en PHP</title>
    </head>
    <body>
        <?php
            $nombre = 'Joaquin Nicolas Ricle';
        ?>

        <div class="cabecera">
            <ul>
                <h1>Includes en PHP</h1>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="sobremi.php">sobre mi</a></li>
                <li><a href="contacto.php">contacto</a></li>
            </ul>
        </div>

        //include_once solo utiliza 1 vez el fichero

        //require y require_once son mas estrictos
<?php

    $tabla = array(
        'accion'=>array(
            'GTA V',
            'COD',
            'HITMAN'
        ),
        'aventura'=>array(
            'FF XII',
            'UNCHARTED',
            'WORLD OF WARCRAFT'
        ),
        'deporte'=>array(
            'FIFA 22',
            'VIRTUAL TENIS 06',
            'FIFA STREET'
        )
    );
?>

<table border=1>
    <?php require 'includes/encabezado.php'; ?>
    <?php require 'includes/primer-fila.php'; ?>
    <?php require 'includes/segunda-fila.php'; ?>
    <?php require 'includes/tercera-fila.php'; ?>
</table>
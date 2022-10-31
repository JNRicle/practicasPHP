<?php

    if(isset($_COOKIE['mi_cookie'])){
        echo '<h1>'.$_COOKIE["mi_cookie"].'<h1>';
    }else{
        echo 'no existe';
    }

    if(isset($_COOKIE['one_year'])){
        echo '<h1>'.$_COOKIE["one_year"].'<h1>';
    }else{
        echo 'no existe';
    }

?>
<a href="crear_cookie.php">crear galletas</a>
<a href="borrar_cookies.php">borrar mis galletas</a>
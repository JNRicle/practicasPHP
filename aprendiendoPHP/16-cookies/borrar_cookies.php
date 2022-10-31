<?php

    if(isset($_COOKIE['mi_cookie'])){
        unset($_COOKIE['mi_cookie']);
        setcookie('mi_cookie','',time()-100);
    }

    header('location:ver_cookies.php');

?>
<?php

    //setcookie("nombre",'valor que solo puede ser texto',caducidad,ruta,dominio);
    setcookie("mi_cookie","valor de mi galleta");

    //cookie con expiracion

    setcookie("one_year","valor de mi cookie por 1 año",time()+(60*60*24*360));

    header('location:ver_cookies.php')
?>
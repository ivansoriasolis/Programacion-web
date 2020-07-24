<?php 
    //crear un cookie
    //setcookie('ubicacion', 'Perú', time()+60*60*24*7,'/');

    //leyendo un cookie
    // if (isset($_COOKIE['ubicacion']))
    //     $ubicacion = $_COOKIE['ubicacion'];
    
    // echo $ubicacion;

    //destruyendo un cookie
    // setcookie('ubicacion', 'USA', time() - 2592000, '/');


    //variable $_SERVER

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";
    echo $_SERVER['SERVER_ADDR'];

?>

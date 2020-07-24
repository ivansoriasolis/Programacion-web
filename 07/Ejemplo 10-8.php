<?php //continue.php
    session_start();

    if (isset($_SESSION['nombre']))
    {
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];

        destroy_session_and_data();

        echo "Bienvenido otra vez $nombre.<br>
               Tu nombre completo es $nombre $apellido.<br>";
    }
    else echo "Por favor <a href='Ejemplo 10-5.php'>Click aqui</a>
                para ingresar";

    function destroy_session_and_data()
    {
        // session_start();
        $_SESSION = array();
        setcookie(session_name(), '', time()-2592000, '/');
        session_destroy();
    }
?>

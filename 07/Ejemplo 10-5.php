<?php 
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);

    if($conexion->connect_error) die("Error fatal");
    header('HTTP/1.1 401 Unauthorized'); //eliminar sesión y volver a pedir datos

    if (isset($_SERVER['PHP_AUTH_USER'])&&
        isset($_SERVER['PHP_AUTH_PW']))
    {
        $un_temp = mysql_entities_fix_string($conexion, $_SERVER['PHP_AUTH_USER']);
        $pw_temp = mysql_entities_fix_string($conexion, $_SERVER['PHP_AUTH_PW']);
        $query   = "SELECT * FROM usuarios WHERE username='$un_temp'";
        $result  = $conexion->query($query);

        if (!$result) die ("Usurio no encontrado");
        elseif ($result->num_rows)
        {
            $row = $result->fetch_array(MYSQLI_NUM);
            $result->close();

            // if(md5($pw_temp) === md5($row[3]) )
            // echo $pw_temp. '<br>';
            // echo $row[3]. '<br>';
            if (password_verify($pw_temp, $row[3])) 
            {
                session_start();
                $_SESSION['nombre']=$row[0];
                $_SESSION['apellido']=$row[1];
                echo htmlspecialchars("$row[0] $row[1]:
                    hols $row[0], has ingresado como '$row[0]'");
                die ("<p><a href='Ejemplo 10-6.php'>Click para continuar
                        </a></p>");
            }
        }
        else die("Usuario/password incorrecto");
    }
    else
    {
        header('WWW-Authenticate: Basic realm="Restricted Area1"');
        header('HTTP/1.0 401 Unauthorized');
        die ("Please enter your username and password");
    }

    $conexion->close();

    function mysql_entities_fix_string($conexion, $string)
    {
        return htmlentities(mysql_fix_string($conexion, $string));
      }
    function mysql_fix_string($conexion, $string)
    {
        if (get_magic_quotes_gpc()) $string = stripslashes($string);
        return $conexion->real_escape_string($string);
      }  
?>

<?php 
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);
    if ($conexion->connect_error) die ("Fatal error");

    if(isset($_POST['user']) && isset($_POST['pass']))
    {
        $user = $_POST['user'];
        $pass = md5($_POST['pass']);

        $query = "INSERT INTO users VALUES('$user', '$pass')";
        $result = $conexion->query($query);
        if (!$result) die ("Falló registro");

        echo "Registro exitoso <a href='signin.php'>Ingresar</a>";
        
    }
    else
    {
        echo <<<_END
        <h1>Regístrate</h1>
        <form action="signup.php" method="post"><pre>
        Usuario  <input type="text" name="user">
        Password <input type="text" name="pass">
                 <input type="hidden" name="reg" value="yes">
                 <input type="submit" value="REGISTRAR">
        </form>
        _END;
    }




    
?>

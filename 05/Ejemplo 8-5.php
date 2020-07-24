<?php 
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);

    if ($conexion->connect_error) die ("Fatal error");

    $query = "SELECT * FROM classics";
    $result = $conexion->query($query);

    if (!$result) die("Error fatal");

    $filas = $result->num_rows;

    for ($j = 0; $j < $filas; ++$j)
    {
        $fila = $result->fetch_array(MYSQLI_ASSOC);

        echo 'Author: ' . htmlspecialchars($fila['author']) . '<br>';
        echo 'Title: ' . htmlspecialchars($fila['title']) . '<br>';
        echo 'Category: ' . htmlspecialchars($fila['category']) . '<br>';
        echo 'Year: ' . htmlspecialchars($fila['year']) . '<br>';
        echo 'ISBN: ' . htmlspecialchars($fila['isbn']) . '<br><br>';
    }
?>
<?php // urlpost.php
  if (isset($_POST['url']))
  {
    echo "HOlA ESTO TE ESTOY DEVOLVIENDO";
    echo file_get_contents("http://" . SanitizeString($_POST['url']));
  }
  
  function SanitizeString($var)
  {
    $var = strip_tags($var);
    $var = htmlentities($var);
    return stripslashes($var);
  }
?>

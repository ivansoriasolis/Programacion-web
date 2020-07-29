<!DOCTYPE html>
<html> <!-- urlget.html -->
<head>
  <title>Comunicacion asincrona</title>
</head>
<body style='text-align:center'>
<h1>Cargando una pagina en un DIV</h1>
<div id='info'>Esta sentencia se reemplazara</div>
<script>  

  request = new asyncRequest()
  request.open("GET", "urlget.php?url=news.com", true)

  request.onreadystatechange = function()
  {
    if (this.readyState == 4)
    {
        if (this.status == 200)
        {
        if (this.responseText != null)
        {
            document.getElementById('info').innerHTML 
            = this.responseText
        }
        else alert("Communication error: No data received")
        }
        else alert( "Communication error: " + this.statusText)
    }
  }

  request.send(null) //no se necesita enviar params

  function asyncRequest()
  {
    try
    {
        var request = new XMLHttpRequest()
    }
    catch(e1)
    {
        try
        {
        request = new ActiveXObject("Msxml2.XMLHTTP")
        }
        catch(e2)
        {
        try
        {
            request = new ActiveXObject("Microsoft.XMLHTTP")
        }
        catch(e3)
        {
            request = false
        }
        }
    }
    return request
  }

</script>
</body>
</html>
<!DOCTYPE html>
<html> <!-- urlpost.html -->
<head>
  <title>Comunicacion asincrona</title>
</head>
<body style='text-align:center'>
<h1>Cargando una pagina en un DIV</h1>
<div id='info'>Esta sentencia se reemplazara</div>
<script>  
  params = "url=news.com"
  request = new asyncRequest()

  request.open("POST", "urlpost.php", true)
  request.setRequestHeader("Content-type",
    "application/x-www-form-urlencoded")

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

  request.send(params)

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
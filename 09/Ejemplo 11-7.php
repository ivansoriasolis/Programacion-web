<html>
  <head>
    <title>Link Test</title>
  </head>
  <body>
    <a id="mylink" href="http://mysite.com">Click me</a><br>
    <a id="yourlink" href="http://google.com">Click me</a><br>
    <script>
      url = document.links[0].href
      document.write('The URL is ' + url)
      document.write('<br>')
   
      url = document.links[1].href
      document.write('The URL is ' + url)
      document.write('<br>')

      numlinks = document.links.length
      console.log("CANTIDAD DE LINKS" + numlinks)

    </script>
  </body>
</html>
<script>
onerror = errorHandler
document.writ("Bienvenido a esta página") //error deliberado

function errorHandler(mensaje, url, linea)
{
    out = "Disculpe, ha ocurrido un error.\n\n";
    out += "Error: " + mensaje + "\n"
    out += "URL: " + url + "\n"
    out += "Linea: " + linea + "\n"
    out += "Click para continuar.\n\n"
    alert(out)
    return true
}
</script>
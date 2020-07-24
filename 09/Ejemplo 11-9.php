<script>
string = "Esta es una cadena de prueba"

with(string)
{
    document.write("La cadena tiene "+ length + " letras<br>")
    document.write("En mayúsculas es: " + toUpperCase())
}
</script>
<script>
function esMayorQue10(elemento, index, array)
{
    return elemento > 10
}

result = [1, 5 ,8, 1 ,4].some(esMayorQue10)
document.write(result)
result = [1, 5 ,8, 1 ,40].some(esMayorQue10)
document.write(result)


animales = ['gato', 'perro', 'vaca', 'caballo', 'elefante']
offset = animales.indexOf('vaca')
document.write(offset)

frutas = ["Platano", "Uva"]
vegetales = ["Zanahoria", "Calabaza"]
document.write(frutas.concat(vegetales))

</script>
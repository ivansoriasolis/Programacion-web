<script>
function Usuario(nombre, username, password)
{
    this.nombre = nombre
    this.username = username
    this.password = password
    
    this.mostrarUsuario = function()
    {
         document.write("Nombre: " + this.nombre + "<br>")
        document.write("Username: " + this.username + "<br>")
        document.write("Password: " + this.password + "<br>")
    }
}

a = new Usuario("Ivan Soria", "isoria", "123456")
a.mostrarUsuario()
</script>
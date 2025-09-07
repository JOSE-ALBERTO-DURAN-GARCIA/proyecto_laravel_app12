<h1>Nuevo Usuario</h1>

<form action="/usuario" method="POST">
   @csrf
   <label for="">Ingrese Nombre</label>
   <input type="text" name="name">
   <br>
   <label for="">Ingrese Su Correo</label>
   <input type="email" name="email">
   <br>
   <label for="">Ingrese La Contraseña</label>
   <input type="password" name="password">
   <br>
   <input type="submit" value="Guardar Usuario">
</form>
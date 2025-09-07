<h1>Editar Usuario</h1>

<form action="/usuario/{{ $usuario->id }}" method="POST">
   @csrf
   @method('PUT')
   <label for="">Ingrese Nombre</label>
   <input type="text" name="name" value="{{ $usuario->name }}">
   <br>
   <label for="">Ingrese Su Correo</label>
   <input type="email" name="email" value="{{ $usuario->email }}">
   <br>
   <label for="">Ingrese La Contraseña</label>
   <input type="password" name="password" value="">
   <br>
   <input type="submit" value="Modificar Usuario">
</form>
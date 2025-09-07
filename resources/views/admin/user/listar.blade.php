<h1>Lista de Usuarios</h1>

<a href="/usuario/create">Nuevo Usuario</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>CORREO</th>
            <th>CREADO EN</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $us)
         <tr>
            <td>{{ $us->id }}</td>
            <td>{{ $us->name }}</td>
            <td>{{ $us->email }}</td>
            <td>{{ $us->created_at }}</td>
            <td>
               <a href="/usuario/{{ $us->id }}/edit">Editar</a>  

               <form action="/usuario/{{ $us->id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="eliminar">
               </form>  
            </td>   
         </tr>            
        @endforeach
    </tbody>
</table>
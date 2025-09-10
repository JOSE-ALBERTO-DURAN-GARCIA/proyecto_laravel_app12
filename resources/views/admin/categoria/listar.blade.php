<h1>lista de categoria</h1>


{{-- es la ruta de listar  /categoria --}}
<form action="/categoria" method="POST">
    @csrf
    <label for="">Ingrese Nombre</label>
    <input type="text" name="nombre">
    <br>
    <label for="">Ingrese Detalle</label>
    <textarea name="detalle" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Guardar Categoria">
</form>

<table border="1">
    <thead> {{-- cabecera --}}
        <tr> {{-- fila tabla --}}
            <th>ID</th> {{-- celda emcabezado --}}
            <th>NOMBRE</th>
            <th>DETALLE</th>
            <th>ACCION</th>
        </tr>
    </thead>
    <tbody>{{-- cuerpo --}}
        @foreach ($categorias as $cat)
            <tr>{{-- fila --}}
                <td>{{ $cat->id }}</td>{{-- celda de datos --}}
                <td>{{ $cat->nombre }}</td>
                <td>{{ $cat->detalle }}</td>
                <td>
                    <form action="/categoria/{{ $cat->id }}" method="POST">
                       @csrf  {{-- por seguridad--}}
                       @method('DELETE')
                       <input type="submit" value="eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $categorias }}

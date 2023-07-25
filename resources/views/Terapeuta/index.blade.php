Mostrar lista de Terapeutas
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($Terapeuta as $terapeuta)
        <tr>
            <td>{{$terapeuta->id}}</td>
            <td>{{$terapeuta->foto}}</td>
            <td>{{$terapeuta->nombre}}</td>
            <td>{{$terapeuta->a_paterno}}</td>
            <td>{{$terapeuta->a_materno}}</td>
            <td>{{$terapeuta->correo}}</td>
            <td>{{$terapeuta->telefono}}</td>
            <td>

                <a href="{{ url ('/terapeuta/'.$terapeuta->id.'/edit')}}">Editar</a>
            
            <form action="{{url ('/terapeuta/'.$terapeuta->id)}}" method="POST">
                @csrf
                {{method_field('DELETE')}}

                <input type="submit" onclick="return confirm ('Quieres borrar?')"
                value="Borrar">
                

            </form>
            
            
            </td>
        </tr>
            
        @endforeach
       
    </tbody>
</table>
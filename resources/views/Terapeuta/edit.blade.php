Modificar informacion del Terapeutas

<form action="{{url('/terapeuta/'.$terapeuta->id)}}" method="POST"  enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
    @include('Terapeuta.form');
</form>
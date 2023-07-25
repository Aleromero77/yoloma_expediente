
<form action="{{url('/terapeuta')}}" method="POST" enctype="multipart/form-data">
@csrf

    @include('Terapeuta.form');

</form>
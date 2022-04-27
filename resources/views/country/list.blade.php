<h1>Listado de Paises</h1>

<b>{{$titulo}}</b>
<br/>

<a href="{{url('/countries/create')}}">Crear Nuevo Pais</a>
<br/>
<br/>

@foreach($countries as $country)
    Nombre : {{$country->name}} <br/>
    ID: {{$country->id}}<br/>
    <a href="{{url('/countries/'.$country->id)}}">Ver Detalle</a>
    <a href="{{url('/countries/'.$country->id.'/edit')}}">Editar</a>
    <a href="{{url('/countries/'.$country->id.'/delete')}}">Eliminar</a>
    
    <hr/>
@endforeach


<script>

    console.log("Prueba de pantalla");

    alert("Prueba de mensaje");
</script>
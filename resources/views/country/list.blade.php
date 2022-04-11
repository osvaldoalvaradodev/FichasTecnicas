<h1>Listado de Paises</h1>

<b>{{$titulo}}</b>
<br/>


@foreach($countries as $country)
    Nombre : {{$country->name}} <br/>
    ID: {{$country->id}}<br/>
    <a href="{{url('/countries/'.$country->id)}}">Ver Detalle</a>
    <hr/>
@endforeach
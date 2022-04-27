<h1>Editando pais: {{$country->name}}</h1>

<form action="{{url('/countries/'.$country->id.'/edit/process')}}" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />

<input type="text" value="{{$country->name}}" name="name" id="name">
</input>
<button action="submit">Guardar</button>
</form>
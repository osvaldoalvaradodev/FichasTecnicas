<h1>Crear nuevo pais</h1>

<form action="{{url('/countries/create/process')}}" method="POST">
    Nombre: 

    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <input type="text" name="name" id="name" ></input>

    <button action="submit">Guardar</button>
</form>
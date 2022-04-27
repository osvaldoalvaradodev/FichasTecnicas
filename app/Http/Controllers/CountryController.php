<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('country.create');
    }


    public function process(Request $request){
        //recibo todos los imput text
        $input = $request->all();
        
        $country = New Country();
        $country->name = $input['name'];
        $country->save();

        //guarda el pais al VUELO pero deben estar los atributos
        //declarados en el modelo (protected $fillable = [])
        //$country = Country::create($input);

        //retorna al listado pais
        return redirect('/countries');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit($country_id)
    {
        //consulta en la BD el pais
        $country = Country::findOrFail($country_id);

        return view('country.edit',compact('country'));
    }

    public function editProcess($country_id,Request $request){
            //consulta en la BD el pais
            $country = Country::findOrFail($country_id);

            $input = $request->all();

            $country->name = $input['name'];

            $country->save();

            return redirect('/countries/'.$country->id);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
    }

    public function delete($country_id){
        $country = Country::findOrFail($country_id);

        $country->delete();

        return redirect('/countries');
        //delete con where
        //Country::where('id','=',$country_id)->delete();

    }

    public function list(){
        //consulto a la BD el listado total de los paises
        $countries = Country::all();
        $titulo = "Titulo de prueba";
        //paso a la vista
        return view('country.list',compact('countries','titulo'));
    }

    public function details($country_id){
        //busca el pais pasando como parametro el ID que viene en la URL
        $country = Country::findOrFail($country_id);
        

        return view('country.detail',compact('country'));

    }
}

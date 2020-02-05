<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PeticionesInformacionResource;
use App\PeticionesInformacion;
use Illuminate\Http\Request;

class PeticionesInformacionController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(PeticionesInformacion::class, 'peticiones');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PeticionesInformacion::collection(PeticionesInformacion::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peticionesInformacion = PeticionesInformacion::create(json_decode($request->getContent(),true));

        return new PeticionesInformacion($peticionesInformacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PeticionesInformacion  $peticionesInformacion
     * @return \Illuminate\Http\Response
     */
    public function show(PeticionesInformacion $peticionesInformacion)
    {
        return new PeticionesInformacionResource($peticionesInformacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PeticionesInformacion  $peticionesInformacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeticionesInformacion $peticionesInformacion)
    {
        $peticionesInformacion->update(json_decode($request->getContent(),true));

        return new PeticionesInformacionResource($peticionesInformacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PeticionesInformacion  $peticionesInformacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeticionesInformacion $peticionesInformacion)
    {
        $peticionesInformacion->delete();
    }
}

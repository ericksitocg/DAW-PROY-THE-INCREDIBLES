<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pedido::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pedido.pedidocreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Pedido::create($request->all());
        /*
        $persona = new Persona;
        $persona->nombre = $request->nombre;
        $persona->save();
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Solicitamos al modelo el Pokemon con el id solicitado por GET.
        //return Persona::where('id', $id)->get();
        return Pedido::find($id);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->all());
        return $pedido;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();
        return 204;
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Biene;


class BieneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busq = $request->buscar;
        $bienes =  Biene::paginate(4);

        return view("admin.biene.listar", compact('busq', 'bienes'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function buscar(Request $request)
    {
        //Auth::user()->autorizar(['user', 'admin']);
        $busq =  $request->buscar;
        $bienes = Biene::where('nombre', "like", "%".$busq."%")->
        orwhere('id', "like", "%".$busq."%")->
        orwhere('coleccion', "like","%".$busq."%")->
        orwhere('estado', "like", "%".$busq."%")->
        orwhere('productor', "like", "%".$busq."%")->
        orwhere('cronologia', "like", "%".$busq."%")->
        orwhere('ubicacion', "like", "%".$busq."%")->
        orwhere('tipouno', "like", "%".$busq."%")->
        orwhere('tipodos', "like", "%".$busq."%")->
        orwhere('tipotres', "like", "%".$busq."%")->
        orwhere('tipocuatro', "like", "%".$busq."%")->
        orwhere('tipocinco', "like", "%".$busq."%")->
        orwhere('procedencia', "like", $busq)->
        orwhere('comunidad', "like", $busq)->paginate(6);
        $c = $bienes->count();
        return view("admin.biene.listar", compact('busq', 'bienes', 'c' ));
    }
    

    public function buscarcol(Request $request)
    {
        //Auth::user()->autorizar(['user', 'admin']);
        $busq =  $request->buscarcol;
        $bienes = Biene::where('coleccion', "like", "%".$busq."%")->paginate(9);
        $c = $bienes->count();
        return view("admin.biene.listar", compact('busq', 'bienes', 'c'));
       //return view("admin.biene.listar", 'c');
        
    }
}

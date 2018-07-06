<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Equipos;


class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['equipos'] = Equipos::all();
        return view('equipos', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'codigo' => 'unique:equipos,codigo',
            'serie' => 'unique:equipos,serie'
        ]);
        $equipo = [

            'codigo' => $request->codigo,
            'model' => $request->model,
            'serie' => $request->serie,
            'descripcion' => $request->descripcion,
            'estado' => $request->estado,
            'costo' => $request->costo,
        ];
        $save = Equipos::insert($equipo);
            if($save)
                return redirect('equipos');
                else

                return redirect()->back()->withInput(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data['equipos'] = Equipos::all();
        return view('welcome', $data);
    }

    public function serch(){

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['equipo'] = Equipos::find($id);
        return view('create', $data);
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
       if($request->has('codigo')){
           $codigo = $request->codigo;
       $equipo = [

            'codigo' => $request->codigo,
            'model' => $request->model,
            'serie' => $request->serie,
            'descripcion' => $request->descripcion,
            'estado' => $request->estado,
            'costo' => $request->costo,
        ];
    }else{
        $equipo =[
        'codigo' => $request->codigo,
        'model' => $request->model,
        'serie' => $request->serie,
        'descripcion' => $request->descripcion,
        'estado' => $request->estado,
        'costo' => $request->costo,
        ];
    }
        
        $update = Equipos::find($id) ->update($equipo);
            if($update)
                return redirect('equipos');
                else

                return redirect()->back()->withInput(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo = Equipos::find($id);
        if($equipo){

            $equipo->destroy($id);

            $msg = ' Hapus Use Bersathil'; 
            }else{

            $msg = ' Hapus USER GAGAL'; 
    }
    return redirect()
    ->back()
    ->withSuccess($msg); 
}
}

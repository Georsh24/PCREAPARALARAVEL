<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Equipos;
use App\Comments;


class EquiposController extends Controller
{


    public function index()
    {

        $data['equipos'] = Equipos::all();
        return view('equipos', $data);
    }

   
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'codigo' => 'unique:equipos,codigo,',
            'serie' => 'unique:equipos,serie,'
            
        ]);
        $equipo = [

            'codigo' => $request->codigo,
            'model' => $request->model,
            'serie' => $request->serie,
            'descripcion' => $request->descripcion,
            'estado' => $request->estado,
            'costo' => $request->costo,
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'email' => $request->email
        ];
        $save = Equipos::insert($equipo);
            if($save)
                return redirect('equipos');
                else

                return redirect()->back()->withInput(); 
    }


    public function show()
    {
        
    
            $data['equipos'] = Equipos::all();
            return view('welcome', $data);
        
    }

    public function indexbuscando($id)
    {
        $equipo = new Equipos;
        $equipos = $equipo-> where('codigo', $id)->get();
     
        return view('equiposbuscando',['equipos'=>$equipos]);
    }

    public function search(){

   $codigo = request()->codigo;
        $id = request()->codigo;
   $equipo = new Equipos;
   $equipos = $equipo-> where('codigo', $codigo)->get();
  
    
    return redirect("/equipo/$id");
    }
    
    public function edit($id)
    {
        $data['equipo'] = Equipos::find($id);
        return view('create', $data);
    }

  
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
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'email' => $request->email
        ];
    }else{
        $equipo =[
        'codigo' => $request->codigo,
        'model' => $request->model,
        'serie' => $request->serie,
        'descripcion' => $request->descripcion,
        'estado' => $request->estado,
        'costo' => $request->costo,
        'nombre' => $request->nombre,
        'telefono' => $request->telefono,
        'email' => $request->email,
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

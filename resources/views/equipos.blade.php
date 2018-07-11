@extends('layouts.app')
@section('content')
<div class="container">
<center>
    <h3>Registrar nuevo equipo</h3>
</center>
@if (Session::has('success'))

<h3>{{Session::get('success')}}</h3>
@endif
<div class="row">
    <div class="col-md-12">
        <div class="table-resposive">
            <table class="table table-hover">
                <thead>
                    <tr class="danger">
                        <th>No.</th>
                        <th>Codigo</th>
                        <th>Modelo</th>
                        <th>Serie</th>
                        <th>Descripcion</th>
                        <th>Estado</th>
                        <th>Costo</th>
                        <th>

                        
                            <a href="{{ URL('equipos/create')}}" class="btn btn-success btn-xs">Nuevo <img src="{{ asset('imgs/nuevo.png')}}"> </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    
                        @foreach ($equipos as $key => $equipo)
                        <tr class="info">
                            <td>{{($key+1)}}</td>
                            <td>{{ $equipo->codigo}}</td>
                            <td>{{ $equipo->model}}</td>
                            <td>{{ $equipo->serie}}</td>
                            <td>{{ $equipo->descripcion}}</td>
                            <td>{{ $equipo->estado}}</td>
                            <td>{{ $equipo->costo}}</td>
                                <td>
                            <center>
                                <a href="{{URL ('/equipos/' . $equipo->id . '/edit')}}" class="btn btn-xs  btn-primary"><img src="{{ asset('imgs/editar.png')}}"></a>

                                <form action="{{ URL('equipos/'. $equipo->id )}}" method="POST"> {{ csrf_field()}}{{ method_field('DELETE')}}
                                
                                
                                
                               <button type="submit" class="btn btn-xs btn-danger"><img src="{{ asset('imgs/eliminar.png')}}"></button>
                            </form>

                                <a href="{{URL ('/pdf/' . $equipo->codigo  )}}" class="btn btn-primary">Imprimir</a>
                        </center>
                   
                            
                            </td>
                        </tr>

                        
                        @endforeach
                   

                </tbody>
            </table>
            
        </div>
    </div>
</div>
</div>
@endsection
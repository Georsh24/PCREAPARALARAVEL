@extends('layouts.app')
@section('content')

<div class="row">

    <div class="col-md-12">
        <form action="{{ URL('equipos')}}{{isset($equipo) ? '/' . $equipo->id: ''}}" method="POST">
            <div class="form-group">

                {{ csrf_field()}}

                @if (isset($equipo))

                {{ method_field('PUT')}}

                @endif
                <div class="form-group{{ $errors->has('codigo') ? ' has-error' : '' }}">
                        <label for="codigo" class="col-md-4 control-label">Codigo</label>

                        <div class="col-md-6">
                            <input id="codigo" type="text" class="form-control" name="codigo" placeholder="123456" value="{{ old('codigo') }}" required autofocus>

                            @if ($errors->has('codigo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('codigo') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
            
                <input type="text" name="model" placeholder="Modelo" class="form-control" value="{{ isset($equipo) ? $equipo->model :''}}">

                <input type="text" name="serie" placeholder="Numero de Serie" class="form-control" value="{{ isset($equipo) ? $equipo->serie :''}}">

                <input type="text" name="descripcion" placeholder="descripcion" class="form-control" value="{{ isset($equipo) ? $equipo->descripcion :''}}">

                <input type="text" name="estado" placeholder="Estado" class="form-control" value="{{ isset($equipo) ? $equipo->estado :''}}">  
                
                <input type="text" name="costo" placeholder="Costo" class="form-control" value="{{ isset($equipo) ? $equipo->costo :''}}">

                <button type="submit" class="btn btn-sm btn-success">Simpan</button>
            
            
            </div>
        </form>
    </div>

</div>

@endsection
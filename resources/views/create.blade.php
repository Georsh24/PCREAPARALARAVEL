@extends('layouts.app')
@section('content')



   
   

        

<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registro</div>
    
                    <div class="panel-body">
                            <form action="{{ URL('equipos')}}{{isset($equipo) ? '/' . $equipo->id: ''}}" method="POST">
                                <div class="form-horizontal">
                    
                                    {{ csrf_field()}}
                    
                                    @if (isset($equipo))
                    
                                    {{ method_field('PUT')}}
                    
                                    @endif
    
                      
                                    <div class="form-group{{ $errors->has('codigo') ? ' has-error' : '' }}">
                                            <label for="codigo" class="col-md-4 control-label">Codigo</label>
                    
                                            <div class="col-md-6">
                                                <input id="codigo" type="text" class="form-control" name="codigo" placeholder="#12345" value="{{ old('codigo') }}" required autofocus>
                    
                                                @if ($errors->has('codigo'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('codigo') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                    
                                                    <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                                            <label for="model" class="col-md-4 control-label">Modelo</label>
                    
                                            <div class="col-md-6">
                                                <input id="model" type="text" class="form-control" name="model" placeholder="Modelo" value="{{ old('model') }}" required autofocus>
                    
                                                @if ($errors->has('model'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('model') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                    
                                                    <div class="form-group{{ $errors->has('serie') ? ' has-error' : '' }}">
                                            <label for="serie" class="col-md-4 control-label">N/S</label>
                    
                                            <div class="col-md-6">
                                                <input id="serie" type="text" class="form-control" name="serie" placeholder="NV56R12m" value="{{ old('serie') }}" required autofocus>
                    
                                                @if ($errors->has('serie'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('serie') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                    
                                                    <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                                            <label for="descripcion" class="col-md-4 control-label">Descripcion</label>
                    
                                            <div class="col-md-6">
                                                <input id="descripcion" type="text" class="form-control" name="descripcion" placeholder="Descripcion del problem" value="{{ old('descripcion') }}" required autofocus>
                    
                                                @if ($errors->has('descripcion'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                    
                                                    <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                                            <label for="estado" class="col-md-4 control-label">Estado</label>
                    
                                            <div class="col-md-6">
                                                <select id="estado"  class="form-control" name="estado" placeholder="" value="{{ old('estado') }}" required autofocus>
                                                <option>En Revisión</option>
                                                <option>En Reparación</option>
                                                <option>Comunicate con Nosotros</option>
                                                <option>Listo</option>
                                                    </select>
                                                @if ($errors->has('estado'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('estado') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                    
                                                    <div class="form-group{{ $errors->has('costo') ? ' has-error' : '' }}">
                                            <label for="costo" class="col-md-4 control-label">Costo Aproximado $:</label>
                    
                                            <div class="col-md-6">
                                                <input id="costo" type="text" class="form-control" name="costo" placeholder="199" value="{{ old('costo') }}" required autofocus>
                    
                                                @if ($errors->has('costo'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('costo') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                           
                                            
                                        </div>
    
    
    
                          
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-sm btn-success">Agregar</button>
                                        
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
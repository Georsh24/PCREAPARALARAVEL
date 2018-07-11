
    <script src="{{ asset('js/jqerymask.js') }}"></script>
     <script src="{{ asset('js/jquery.js') }}"></script>

@extends('layouts.app')
@section('content')    
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registro</div>
    
                    <div class="panel-body">
                            <form action="{{ URL('equipos')}}{{isset($equipo) ? '/' . $equipo->id: ''}}" method="POST">
                                <div class="">
                    
                                    {{ csrf_field()}}
                    
                                    @if (isset($equipo))
                    
                                    {{ method_field('PUT')}}
                    
                                    @endif
    
                                
                                    <div class="col-md-6 form-group{{ $errors->has('codigo') ? ' has-error' : '' }}">
                                            <label for="codigo" class=" control-label">Codigo</label>
                    
                                            <div class="">
                                                <input id="codigo" type="text" class="form-control" name="codigo" placeholder="#12345" value="{{ old('codigo') }}">
                    
                                                @if ($errors->has('codigo'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('codigo') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                    
                                                    <div class="col-md-6 form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                                            <label for="model" class=" control-label">Modelo</label>
                    
                                            <div class="">
                                                <input id="model" type="text" class="form-control" name="model" placeholder="Modelo" value="{{ old('model') }}" required autofocus>
                    
                                                @if ($errors->has('model'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('model') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                    
                                                    <div class="col-md-6 form-group{{ $errors->has('serie') ? ' has-error' : '' }}">
                                            <label for="serie" class=" control-label">N/S</label>
                    
                                            <div class="">
                                                <input id="serie" type="text" class="form-control" name="serie" placeholder="NV56R12m" value="{{ old('serie') }}" required autofocus>
                    
                                                @if ($errors->has('serie'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('serie') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                    
                                                    <div class="col-md-6 form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                                            <label for="descripcion" class=" control-label">Descripcion</label>
                    
                                            <div class="">
                                                <input id="descripcion" type="text" class="form-control" name="descripcion" placeholder="Descripcion del problem" value="{{ old('descripcion') }}" required autofocus>
                    
                                                @if ($errors->has('descripcion'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                    
                                                    <div class="col-md-6 form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                                            <label for="estado" class=" control-label">Estado</label>
                    
                                            <div class="">
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
                    
                                                    <div class="col-md-6 form-group{{ $errors->has('costo') ? ' has-error' : '' }}">
                                            <label for="costo" class=" control-label">Costo Aproximado $:</label>
                    
                                            <div class="">
                                                <input id="costo" type="text" class="form-control" name="costo" placeholder="199" value="{{ old('costo') }}" required autofocus>
                    
                                                @if ($errors->has('costo'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('costo') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                           
                                            
                                        </div>

                                                           <div class="col-md-6 form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                            <label for="nombre" class=" control-label">Nombre:</label>
                    
                                            <div class="">
                                                <input id="nombre" type="text" class="form-control" name="nombre" placeholder="199" value="{{ old('nombre') }}" required autofocus>
                    
                                                @if ($errors->has('nombre'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('nombre') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                           
                                        </div>

                                                           <div class="col-md-6 form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                                            <label for="telefono" class=" control-label">Telefono:</label>
                    
                                            <div class="">
                                                <input id="telefono" type="text"  class="form-control" name="telefono"  value="{{ old('telefono') }}" required autofocus>
                    
                                                @if ($errors->has('telefono'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('telefono') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                           
                                            
                                        </div>

                                                           <div class="col-md-6 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class=" control-label">E-mail:</label>
                    
                                            <div class="">
                                                <input id="email" type="text" class="form-control" name="email"  value="{{ old('email') }}" required autofocus>
                    
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                           
                                            
                                        </div>
    
    
    
                          
                            <div class="form-group">
                                <div class="col-md-6 ">
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
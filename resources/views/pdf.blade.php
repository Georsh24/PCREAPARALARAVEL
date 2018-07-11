



        <div class="col-md-8">
            <div class="panel ">
              <div class="panel-heading">
                <span class="glyphicon glyphicon-time" aria-hidden=""></span> Tu Equipo
              </div>
              <div class="panel-body">
                  
                  
                  <div class="row">
                      <div class="col-md-12">
                          <div class="table-resposive">
                              <table class="table table-hover table-bordered">
                                  <thead>
                                      <tr>
                                          <th>No.</th>
                                          <th>Codigo</th>
                                          <th>Modelo</th>
                                          <th>Serie</th>
                                          <th>Descripcion</th>
                                          <th>Estado</th>
                                          <th>Costo</th>
                                  
                                      </tr>
                                  </thead>
                                  <tbody>
                                
                                      @foreach ($equipos as $key => $equipo)
                                      <tr>
                                          <td>{{($key+1)}}</td>
                                          <td>{{ $equipo->codigo}}</td>
                                          <td>{{ $equipo->model}}</td>
                                          <td>{{ $equipo->serie}}</td>
                                          <td>{{ $equipo->descripcion}}</td>
                                          <td>{{ $equipo->estado}}</td>
                                          <td>{{ $equipo->costo}}</td>
                                        
                                      </tr>

                                     
                                      @endforeach  
                                 
                  
                                  </tbody>
                              </table>
                              @foreach ($equipos as $key => $equipo)
                                      
                                      <div class="container">
                                      <div class="col-md-6">
                                          {{($key+1)}}
                                        
                                          {{ $equipo->codigo}}
                                          {{ $equipo->model}}
                                          {{ $equipo->serie}}
                                          {{ $equipo->descripcion}}
                                          {{ $equipo->estado}}
                                          {{ $equipo->costo}}
                                        
                                    </div>
                                     </div>
                                      @endforeach
                          </div>
                      </div>
                  </div>
                  
      
     
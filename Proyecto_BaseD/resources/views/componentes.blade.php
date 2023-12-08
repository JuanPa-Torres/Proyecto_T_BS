
<div class="container">
  <div class="row">
    <div class="p5 table-responsive">
      <h2 class="text-center p-3">Componentes</h2>

      @if(session("Correcto"))
      <div class="alert alert-success">{{session("Correcto")}}</div>
      @endif

      @if(session("Incorrecto"))
      <div class="alert alert-danger">{{session("Incorrecto")}}</div>
      @endif

      <script>
        var res=function(){
          var not=confirm("¿Estas Seguro de Eliminar?");
          return not;
        }
      </script>

      <!-- Modal de registrar usuario -->
      <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Componentes</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{route("componentes.create" )}}" method="POST">
                    @csrf         

                <div class="mb-3">
                  <label for="txtTija" class="form-label">Tija</label>
                  <input type="text" class="form-control" id="txtTija" aria-describedby="emailHelp" name="txtTija">
                </div>

                <div class="mb-3">
                  <label for="txtAmortiguador" class="form-label">Amortiguador</label>
                  <input type="text" class="form-control" id="txtAmortiguador" aria-describedby="emailHelp" name="txtAmortiguador">
                </div>

                <div class="mb-3">
                  <label for="txtRuedas_Delanteras" class="form-label">Ruedas Delanteras</label>
                  <input type="text" class="form-control" id="txtRuedas_Delanteras" aria-describedby="emailHelp" name="txtRuedas_Delanteras">
                </div>

                <div class="mb-3">
                  <label for="txtRuedas_Traseras" class="form-label">Ruedas Traseras</label>
                  <input type="email" class="form-control" id="txtRuedas_Traseras" aria-describedby="emailHelp" name="txtRuedas_Traseras">
                </div>

                <div class="mb-3">
                  <label for="txtCambio_Delantero" class="form-label">Cambio Delantero</label>
                  <input type="password" class="form-control" id="txtCambio_Delantero" aria-describedby="emailHelp" name="txtCambio_Delantero">
                </div>

                <div class="mb-3">
                  <label for="txtCambio_Trasero" class="form-label">Cambio Trasero</label>
                  <input type="password" class="form-control" id="txtCambio_Trasero" aria-describedby="emailHelp" name="txtCambio_Trasero">
                </div>

                <div class="mb-3">
                  <label for="txtCasstte" class="form-label">Cassette</label>
                  <input type="password" class="form-control" id="txtCasstte" aria-describedby="emailHelp" name="txtCasstte">
                </div>

                <div class="mb-3">
                  <label for="txtBielas" class="form-label">Bielas</label>
                  <input type="password" class="form-control" id="txtBielas" aria-describedby="emailHelp" name="txtBielas">
                </div>

                <div class="mb-3">
                  <label for="txtFrenos" class="form-label">Frenos</label>
                  <input type="password" class="form-control" id="txtFrenos" aria-describedby="emailHelp" name="txtFrenos">
                </div>

                <div class="mb-3">
                  <label for="txtRotores_Frenos" class="form-label">Rotores_Frenos</label>
                  <input type="password" class="form-control" id="txtRotores_Frenos" aria-describedby="emailHelp" name="txtRotores_Frenos">
                </div>

              <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
            </form>
            </div>
            
        </div>
        </div>
    </div>

      <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modalAgregar">Añadir componentes</button>
      <table class="table table-striped table-border border-success">
        <thead class="table-dark">
            <tr>
          <th class="text-center p-3">Tija</th>
          <th class="text-center p-3">Amortiguador</th>
          <th class="text-center p-3">Ruedas Delanteras</th>
          <th class="text-center p-3">Ruedas Traseras</th>
          <th class="text-center p-3">Llantas</th>
          <th class="text-center p-3">Cambio Delantero</th>
          <th class="text-center p-3">Cambio Trasero</th>
          <th class="text-center p-3">Casstte</th>
          <th class="text-center p-3">Bielas</th>
          <th class="text-center p-3">Frenos</th>
          <th class="text-center p-3">Rotores de Frenos</th>
          <th colspan="2"></th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
            
             @foreach ($componentes as $componente)
             <tr>
                 <td>{{$componente->Tija}}</td>
                 <td>{{$componente->Amortiguador}}</td>
                 <td>{{$componente->Ruedas_Delanteras}}</td>
                 <td>{{$componente->Ruedas_Traseras}}</td>
                 <td>{{$componente->Llantas}}</td>
                 <td>{{$componente->Cambio_Delantero}}</td>
                 <td>{{$componente->Cambio_Trasero}}</td>
                 <td>{{$componente->Casstte}}</td>
                 <td>{{$componente->Bielas}}</td>
                 <td>{{$componente->Frenos}}</td>
                 <td>{{$componente->Rotores_Frenos}}</td>

                <td> <a href="" data-bs-toggle="modal" data-bs-target="#modalEditar{{$usuario->Tija}}" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/3838/3838756.png" alt="editar" class="service-img" width="40" height="40"></a>
                </td>

                <td><a href="{{route("componentes.delete",$usuario->Tija)}}" onclick="return res()" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/1828/1828843.png" alt="eliminar" class="service-img" width="40" height="40"></a>
                </td>



            <!-- Modal de Modificar datos -->
            <div class="modal fade" id="modalEditar{{$componentes->Tija}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route("componentes.update")}}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                          <label for="txtTija" class="form-label">Tija</label>
                          <input type="text" class="form-control" id="txtTija" aria-describedby="emailHelp" name="txtTija" value="{{$componentes->Tija}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtAmortiguador" class="form-label">Amortiguador</label>
                          <input type="text" class="form-control" id="txtAmortiguador" aria-describedby="emailHelp" name="txtAmortiguador" value="{{$componentes->Amortiguador}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtRuedas_Delanteras" class="form-label">Ruedas Delanteras</label>
                          <input type="text" class="form-control" id="txtRuedas_Delanteras" aria-describedby="emailHelp" name="txtRuedas_Delanteras" value="{{$componentes->Ruedas_Delanteras}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtRuedas_Traseras" class="form-label">Ruedas Traseras</label>
                          <input type="email" class="form-control" id="txtRuedas_Traseras" aria-describedby="emailHelp" name="txtRuedas_Traseras" value="{{$componentes->Ruedas_Traseras}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtCambio_Delantero" class="form-label">Cambio Delantero</label>
                          <input type="password" class="form-control" id="txtCambio_Delantero" aria-describedby="emailHelp" name="txtCambio_Delantero" value="{{$componentes->Cambio_Delantero}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtCambio_Trasero" class="form-label">Cambio Trasero</label>
                          <input type="password" class="form-control" id="txtCambio_Trasero" aria-describedby="emailHelp" name="txtCambio_Trasero" value="{{$componentes->Cambio_Trasero}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtCasstte" class="form-label">Cassette</label>
                          <input type="password" class="form-control" id="txtCasstte" aria-describedby="emailHelp" name="txtCasstte" value="{{$componentes->Casstte}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtBielas" class="form-label">Bielas</label>
                          <input type="password" class="form-control" id="txtBielas" aria-describedby="emailHelp" name="txtBielas" value="{{$componentes->Bielas}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtFrenos" class="form-label">Frenos</label>
                          <input type="password" class="form-control" id="txtFrenos" aria-describedby="emailHelp" name="txtFrenos" value="{{$componentes->Frenos}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtRotores_Frenos" class="form-label">Rotores_Frenos</label>
                          <input type="password" class="form-control" id="txtRotores_Frenos" aria-describedby="emailHelp" name="txtRotores_Frenos" value="{{$componentes->Rotores_Frenos}}">
                        </div>

                      <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Modificar</button>
                    </div>
                    </form>
                    </div>
                    
                </div>
                </div>
            </div>


             </tr>
             @endforeach
                 </tbody>
            </table>
         </div>
    </div>
</div>
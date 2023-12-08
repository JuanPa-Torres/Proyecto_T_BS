
<div class="container">
  <div class="row">
    <div class="p5 table-responsive">
      <h2 class="text-center p-3">Caracteristicas</h2>

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

      <!-- Modal de registrar caracteristicas -->
      <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Caracteristicas</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{route("caracteristicas.create" )}}" method="POST">
                    @csrf   

                    <div class="mb-3">
                      <label for="txtTalla_Cuadro" class="form-label">Talla de Cuadro</label>
                      <input type="text" class="form-control" id="txtTalla_Cuadro" aria-describedby="emailHelp" name="txtTalla_Cuadro">
                    </div>

                    <div class="mb-3">
                      <label for="txtMaterial" class="form-label">Material</label>
                      <input type="text" class="form-control" id="txtMaterial" aria-describedby="emailHelp" name="txtMaterial">
                    </div>

                    <div class="mb-3">
                      <label for="txtColores_Disponibles" class="form-label">ColoresD isponibles</label>
                      <input type="text" class="form-control" id="txtColores_Disponibles" aria-describedby="emailHelp" name="txtColores_Disponibles">
                    </div>

                    <div class="mb-3">
                      <label for="txtGeometrias" class="form-label">Geometrias</label>
                      <input type="text" class="form-control" id="txtGeometrias" aria-describedby="emailHelp" name="txtGeometrias">
                    </div>

                    <div class="mb-3">
                      <label for="txtPeso" class="form-label">Peso</label>
                      <input type="text" class="form-control" id="txtPeso" aria-describedby="emailHelp" name="txtPeso">
                    </div>

                    <div class="mb-3">
                      <label for="txtLimite_Peso" class="form-label">Limite de Peso</label>
                      <input type="text" class="form-control" id="txtLimite_Peso" aria-describedby="emailHelp" name="txtLimite_Peso">
                    </div>

                    <div class="mb-3">
                      <label for="txtGarantia" class="form-label">Garantia</label>
                      <input type="text" class="form-control" id="txtGarantia" aria-describedby="emailHelp" name="txtGarantia">
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

      <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modalAgregar">Añadir Usuario</button>
      <table class="table table-striped table-border border-success">
        <thead class="table-dark">
            <tr>
          <th class="text-center p-3">Talla de Cuadro</th>
          <th class="text-center p-3">Material Paternos</th>
          <th class="text-center p-3">Colores Disponibles</th>
          <th class="text-center p-3">Geometrias</th>
          <th class="text-center p-3">Peso</th>
          <th class="text-center p-3">Limite_Peso</th>
          <th class="text-center p-3">Garantia</th>
          <th colspan="2"></th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
            
             @foreach ($caracteristicas as $caracteristica)
             <tr>
                 <td>{{$caracteristica->Talla_Cuadro}}</td>
                 <td>{{$caracteristica->Material}}</td>
                 <td>{{$caracteristica->Colores_Disponibles}}</td>
                 <td>{{$caracteristica->Geometrias}}</td>
                 <td>{{$caracteristica->Peso}}</td>
                 <td>{{$caracteristica->Limite_Peso}}</td>
                 <td>{{$caracteristica->Garantia}}</td>

                <td> <a href="" data-bs-toggle="modal" data-bs-target="#modalEditar{{$caracteristica->idCaracteristica}}" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/3838/3838756.png" alt="editar" class="service-img" width="40" height="40"></a>
                </td>

                <td><a href="{{route("caracteristicas.delete",$caracteristica->idCaracteristica)}}" onclick="return res()" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/1828/1828843.png" alt="eliminar" class="service-img" width="40" height="40"></a>
                </td>



            <!-- Modal de Modificar datos -->
            <div class="modal fade" id="modalEditar{{$caracteristicas->idCaracteristica}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route("caracteristicas.update")}}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                          <label for="txtTalla_Cuadro" class="form-label">Talla_Cuadro</label>
                          <input type="text" class="form-control" id="txtTalla_Cuadro" aria-describedby="emailHelp" name="txtTalla_Cuadro" value="{{$caracteristicas->Talla_Cuadro}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtMaterial" class="form-label">Material</label>
                          <input type="text" class="form-control" id="txtMaterial" aria-describedby="emailHelp" name="txtMaterial" value="{{$caracteristicas->Material}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtColores_Disponibles" class="form-label">ColoresD isponibles</label>
                          <input type="text" class="form-control" id="txtColores_Disponibles" aria-describedby="emailHelp" name="txtColores_Disponibles" value="{{$caracteristicas->Colores_Disponibles}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtGeometrias" class="form-label">Geometrias</label>
                          <input type="text" class="form-control" id="txtGeometrias" aria-describedby="emailHelp" name="txtGeometrias" value="{{$caracteristicas->Geometrias}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtPeso" class="form-label">Peso</label>
                          <input type="text" class="form-control" id="txtPeso" aria-describedby="emailHelp" name="txtPeso" value="{{$caracteristicas->Peso}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtLimite_Peso" class="form-label">Limite de Peso</label>
                          <input type="text" class="form-control" id="txtLimite_Peso" aria-describedby="emailHelp" name="txtLimite_Peso" value="{{$caracteristicas->Limite_Peso}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtGarantia" class="form-label">Garantia</label>
                          <input type="text" class="form-control" id="txtGarantia" aria-describedby="emailHelp" name="txtGarantia" value="{{$caracteristicas->Garantia}}">
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
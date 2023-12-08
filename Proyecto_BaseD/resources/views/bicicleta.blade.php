
<div class="container">
  <div class="row">
    <div class="p5 table-responsive">
      <h2 class="text-center p-3">Bicicletas</h2>

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

      <!-- Modal de registrar bicicleta -->
      <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar bicicleta</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{route("bicicleta.create" )}}" method="POST">
                    @csrf         

                    <label for="txtIdBicicleta" class="form-label">Bicicleta</label>
                    <input type="text" class="form-control" id="txtIdBicicleta" aria-describedby="emailHelp" name="txtIdBicicleta">
                  </div>

                  <div class="mb-3">
                    <label for="txtMarca" class="form-label">Marca</label>
                    <input type="text" class="form-control" id="txtMarca" aria-describedby="emailHelp" name="txtMarca">
                  </div>

                  <div class="mb-3">
                    <label for="txtModelo" class="form-label">Modelo</label>
                    <input type="text" class="form-control" id="txtModelo" aria-describedby="emailHelp" name="txtModelo">
                  </div>

                  <div class="mb-3">
                    <label for="txtComponentes" class="form-label">Componentes</label>
                    <input type="email" class="form-control" id="txtComponentes" aria-describedby="emailHelp" name="txtComponentes">
                  </div>

                  <div class="mb-3">
                    <label for="txtCaracteristicas" class="form-label">Caracteristicas</label>
                    <input type="password" class="form-control" id="txtCaracteristicas" aria-describedby="emailHelp" name="txtCaracteristicas">
                  </div>

                  <div class="mb-3">
                    <label for="txtPrecio" class="form-label">Precio</label>
                    <input type="password" class="form-control" id="txtPrecio" aria-describedby="emailHelp" name="txtPrecio">
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

      <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modalAgregar">Añadir bicicleta</button>
      <table class="table table-striped table-border border-success">
        <thead class="table-dark">
            <tr>
          <th class="text-center p-3">Bicicleta</th>
          <th class="text-center p-3">Marca</th>
          <th class="text-center p-3">Modelo</th>
          <th class="text-center p-3">Componentes</th>
          <th class="text-center p-3">Caracteristicas</th>
          <th class="text-center p-3">Precio</th>
          <th colspan="2"></th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
            
             @foreach ($bicicletas as $bicicleta)
             <tr>
                 <td>{{$bicicleta->idBicicleta }}</td>
                 <td>{{$bicicleta->Marca}}</td>
                 <td>{{$bicicleta->Modelo}}</td>
                 <td>{{$bicicleta->Componentes}}</td>
                 <td>{{$bicicleta->Caracteristicas}}</td>
                 <td>{{$bicicleta->Precio}}</td>

                <td> <a href="" data-bs-toggle="modal" data-bs-target="#modalEditar{{$bicicleta->idBicicleta}}" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/3838/3838756.png" alt="editar" class="service-img" width="40" height="40"></a>
                </td>

                <td><a href="{{route("bicicleta.delete",$bicicleta->idBicicleta)}}" onclick="return res()" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/1828/1828843.png" alt="eliminar" class="service-img" width="40" height="40"></a>
                </td>



            <!-- Modal de Modificar datos -->
            <div class="modal fade" id="modalEditar{{$bicicleta->idBicicleta}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route("bicicleta.update")}}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                          <label for="txtIdBicicleta" class="form-label">Bicicleta</label>
                          <input type="text" class="form-control" id="txtIdBicicleta" aria-describedby="emailHelp" name="txtIdBicicleta" value="{{$bicicleta->IdBicicleta}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtMarca" class="form-label">Marca</label>
                          <input type="text" class="form-control" id="txtMarca" aria-describedby="emailHelp" name="txtMarca" value="{{$bicicleta->Marca}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtModelo" class="form-label">Modelo</label>
                          <input type="text" class="form-control" id="txtModelo" aria-describedby="emailHelp" name="txtModelo" value="{{$bicicleta->Modelo}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtComponentes" class="form-label">Componentes</label>
                          <input type="email" class="form-control" id="txtComponentes" aria-describedby="emailHelp" name="txtComponentes" value="{{$bicicleta->Componentes}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtCaracteristicas" class="form-label">Caracteristicas</label>
                          <input type="password" class="form-control" id="txtCaracteristicas" aria-describedby="emailHelp" name="txtCaracteristicas" value="{{$bicicleta->Caracteristicas}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtPrecio" class="form-label">Precio</label>
                          <input type="password" class="form-control" id="txtPrecio" aria-describedby="emailHelp" name="txtPrecio" value="{{$bicicleta->Precio}}">
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
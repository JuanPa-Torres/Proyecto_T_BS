
<div class="container">
  <div class="row">
    <div class="p5 table-responsive">
      <h2 class="text-center p-3">Marca</h2>

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

      <!-- Modal de registrar Marca -->
      <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Marca</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{route("marca.create" )}}" method="POST">
                    @csrf         
                 <div class="mb-3">
                  <label for="txtNombre" class="form-label">Nombre de Marca</label>
                  <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtNombre">
                </div>

                 <div class="mb-3">
                  <label for="txtPais" class="form-label">Pais</label>
                  <input type="text" class="form-control" id="txtPais" aria-describedby="emailHelp" name="txtPais">
                </div>

                <div class="mb-3">
                  <label for="txtLogo" class="form-label">Logo</label>
                  <input type="text" class="form-control" id="txtLogo" aria-describedby="emailHelp" name="txtLogo">
                </div>

                <div class="mb-3">
                  <label for="txtPais_Distribuidor" class="form-label"> Pais Distribuidor</label>
                  <input type="email" class="form-control" id="txtPais_Distribuidor" aria-describedby="emailHelp" name="txtPais_Distribuidor">
                </div>

                <div class="mb-3">
                  <label for="txtDistribuidor" class="form-label">Distribuidor</label>
                  <input type="password" class="form-control" id="txtDistribuidor" aria-describedby="emailHelp" name="txtDistribuidor">
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

      <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modalAgregar">Añadir Marca</button>
      <table class="table table-striped table-border border-success">
        <thead class="table-dark">
            <tr>
          <th class="text-center p-3">Nombre</th>
          <th class="text-center p-3">País de origen</th>
          <th class="text-center p-3">Logo</th>
          <th class="text-center p-3"> Pais Distribuidor</th>
          <th class="text-center p-3">Distribuidor</th>
          <th colspan="2"></th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
            
             @foreach ($marcas as $marca)
             <tr>
                 <td>{{$marca->Nombre}}</td>
                 <td>{{$marca->Pais}}</td>
                 <td>{{$marca->Logo}}</td>
                 <td>{{$marca->Pais_Distribuidor}}</td>
                 <td>{{$marca->Distribuidor}}</td>

                <td> <a href="" data-bs-toggle="modal" data-bs-target="#modalEditar{{$marca->Nombre}}" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/3838/3838756.png" alt="editar" class="service-img" width="40" height="40"></a>
                </td>

                <td><a href="{{route("marca.delete",$marca->Nombre)}}" onclick="return res()" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/1828/1828843.png" alt="eliminar" class="service-img" width="40" height="40"></a>
                </td>



            <!-- Modal de Modificar datos -->
            <div class="modal fade" id="modalEditar{{$marca->Nombre}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route("marca.update")}}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                          <label for="txtNombre" class="form-label">Nombre de Usuario</label>
                          <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtNombre" value="{{$marca->Nombre}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtPais" class="form-label">Pais</label>
                          <input type="text" class="form-control" id="txtPais" aria-describedby="emailHelp" name="txtPais" value="{{$marca->Pais}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtPais" class="form-label">Pais</label>
                          <input type="text" class="form-control" id="txtPais" aria-describedby="emailHelp" name="txtPais" value="{{$marca->Logo}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtPais_Distribuidor" class="form-label">Pais Distribuidor</label>
                          <input type="email" class="form-control" id="txtPais_Distribuidor" aria-describedby="emailHelp" name="txtPais_Distribuidor" value="{{$marca->Pais_Distribuidor}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtDistribuidor" class="form-label">Distribuidor</label>
                          <input type="password" class="form-control" id="txtDistribuidor" aria-describedby="emailHelp" name="txtDistribuidor" value="{{$marca->Distribuidor}}">
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
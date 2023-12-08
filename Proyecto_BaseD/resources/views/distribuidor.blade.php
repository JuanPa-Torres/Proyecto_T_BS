
<div class="container">
  <div class="row">
    <div class="p5 table-responsive">
      <h2 class="text-center p-3">Distribuidor</h2>

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

      <!-- Modal de registrar distribuidor -->
      <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Distribuidor</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{route("distribuidor.create" )}}" method="POST">
                    @csrf         
                 <div class="mb-3">
                  <label for="txtNombre" class="form-label">Nombre del distribuidor</label>
                  <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtNombre">
                </div>

                <div class="mb-3">
                  <label for="txtCiudad" class="form-label">Ciudad</label>
                  <input type="text" class="form-control" id="txtCiudad" aria-describedby="emailHelp" name="txtCiudad">
                </div>

                <div class="mb-3">
                  <label for="txtTelefono" class="form-label">Telefono</label>
                  <input type="text" class="form-control" id="txtTelefono" aria-describedby="emailHelp" name="txtTelefono">
                </div>

                <div class="mb-3">
                  <label for="txtCorreo" class="form-label">Correo</label>
                  <input type="email" class="form-control" id="txtCorreo" aria-describedby="emailHelp" name="txtCorreo">
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

      <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modalAgregar">Añadir Distribuidor</button>
      <table class="table table-striped table-border border-success">
        <thead class="table-dark">
            <tr>
          <th class="text-center p-3">Nombre</th>
          <th class="text-center p-3">Ciudad</th>
          <th class="text-center p-3">Telefono</th>
          <th class="text-center p-3">Correo</th>
          <th colspan="2"></th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
            
             @foreach ($distribuidores as $distribuidor)
             <tr>
                 <td>{{$distribuidor->Nombre}}</td>
                 <td>{{$distribuidor->Ciudad}}</td>
                 <td>{{$distribuidor->Telefono}}</td>
                 <td>{{$distribuidor->Correo}}</td>


                <td> <a href="" data-bs-toggle="modal" data-bs-target="#modalEditar{{$distribuidor->Nombre}}" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/3838/3838756.png" alt="editar" class="service-img" width="40" height="40"></a>
                </td>

                <td><a href="{{route("distribuidor.delete",$distribuidor->Nombre)}}" onclick="return res()" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/1828/1828843.png" alt="eliminar" class="service-img" width="40" height="40"></a>
                </td>



            <!-- Modal de Modificar datos -->
            <div class="modal fade" id="modalEditar{{$distribuidor->Nombre}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route("distribuidor.update")}}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                          <label for="txtNombre" class="form-label">Nombre del distribuidor</label>
                          <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtNombre" value="{{$distribuidor->Nombre}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtCiudad" class="form-label">Ciudad</label>
                          <input type="text" class="form-control" id="txtCuidad" aria-describedby="emailHelp" name="txtCiudad" value="{{$distribuidor->Ciudad}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtTelefono" class="form-label">Telefono</label>
                          <input type="text" class="form-control" id="txtTelefono" aria-describedby="emailHelp" name="txtTelefono" value="{{$distribuidor->Telefono}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtCorreo" class="form-label">Correo</label>
                          <input type="email" class="form-control" id="txtCorreo" aria-describedby="emailHelp" name="txtCorreo" value="{{$distribuidor->Correo}}">
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

<div class="container">
  <div class="row">
    <div class="p5 table-responsive">
      <h2 class="text-center p-3">Usuario</h2>

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
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Usuario</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{route("usuario.create" )}}" method="POST">
                    @csrf         
                 <div class="mb-3">
                  <label for="txtNombre" class="form-label">Nombre de Usuario</label>
                  <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtNombre">
                </div>

                <div class="mb-3">
                  <label for="txtApell_p" class="form-label">Apellido Paterno</label>
                  <input type="text" class="form-control" id="txtApell_p" aria-describedby="emailHelp" name="txtApell_Paterno">
                </div>

                <div class="mb-3">
                  <label for="txtPais" class="form-label">Pais</label>
                  <input type="text" class="form-control" id="txtPais" aria-describedby="emailHelp" name="txtPais">
                </div>

                <div class="mb-3">
                  <label for="txtCorreo" class="form-label">Correo</label>
                  <input type="email" class="form-control" id="txtCorreo" aria-describedby="emailHelp" name="txtCorreo">
                </div>

                <div class="mb-3">
                  <label for="txtContraseña" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="txtContraseña" aria-describedby="emailHelp" name="txtContraseña">
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
          <th class="text-center p-3">Nombre</th>
          <th class="text-center p-3">Apellido Paternos</th>
          <th class="text-center p-3">País de origen</th>
          <th class="text-center p-3">Correo</th>
          <th class="text-center p-3">Contraseña</th>
          <th colspan="2"></th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
            
             @foreach ($usuarios as $usuario)
             <tr>
                 <td>{{$usuario->Nombre}}</td>
                 <td>{{$usuario->Apell_Paterno}}</td>
                 <td>{{$usuario->Pais}}</td>
                 <td>{{$usuario->Correo_Elec}}</td>
                 <td>{{$usuario->Contraseña}}</td>

                <td> <a href="" data-bs-toggle="modal" data-bs-target="#modalEditar{{$usuario->Nombre}}" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/3838/3838756.png" alt="editar" class="service-img" width="40" height="40"></a>
                </td>

                <td><a href="{{route("usuario.delete",$usuario->Nombre)}}" onclick="return res()" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/1828/1828843.png" alt="eliminar" class="service-img" width="40" height="40"></a>
                </td>



            <!-- Modal de Modificar datos -->
            <div class="modal fade" id="modalEditar{{$usuario->Nombre}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route("usuario.update")}}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                          <label for="txtNombre" class="form-label">Nombre de Usuario</label>
                          <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtNombre" value="{{$usuario->Nombre}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtApell_Paterno" class="form-label">Apellido Paterno</label>
                          <input type="text" class="form-control" id="txtApell_Paterno" aria-describedby="emailHelp" name="txtApell_p" value="{{$usuario->Apell_Paterno}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtPais" class="form-label">Pais</label>
                          <input type="text" class="form-control" id="txtPais" aria-describedby="emailHelp" name="txtPais" value="{{$usuario->Pais}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtCorreo" class="form-label">Correo</label>
                          <input type="email" class="form-control" id="txtCorreo" aria-describedby="emailHelp" name="txtCorreo" value="{{$usuario->Correo_Elec}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtContraseña" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" id="txtContraseña" aria-describedby="emailHelp" name="txtContraseña" value="{{$usuario->Contraseña}}">
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
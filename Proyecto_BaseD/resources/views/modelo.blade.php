
<div class="container">
  <div class="row">
    <div class="p5 table-responsive">
      <h2 class="text-center p-3">Modelos</h2>

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

      <!-- Modal de registrar Modelo -->
      <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Modelo</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{route("modelo.create" )}}" method="POST">
                    @csrf         
                 <div class="mb-3">
                  <label for="txtNombre" class="form-label">Nombre del Modelo</label>
                  <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtNombre">
                </div>

                <div class="mb-3">
                  <label for="txtModalidad" class="form-label">Modalidad</label>
                  <input type="text" class="form-control" id="txtModalidad" aria-describedby="emailHelp" name="txtModalidad">
                </div>

                <div class="mb-3">
                  <label for="txtAño" class="form-label">Año</label>
                  <input type="text" class="form-control" id="txtAño" aria-describedby="emailHelp" name="txtAño">
                </div>

                <div class="mb-3">
                  <label for="txtGama" class="form-label">Gama</label>
                  <input type="text" class="form-control" id="txtGama" aria-describedby="emailHelp" name="txtGama">
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

      <button class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#modalAgregar">Añadir Modelo</button>
      <table class="table table-striped table-border border-success">
        <thead class="table-dark">
            <tr>
          <th class="text-center p-3">Nombre</th>
          <th class="text-center p-3">Modalidad</th>
          <th class="text-center p-3">Año</th>
          <th class="text-center p-3">Gama</th>
          <th colspan="2"></th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
            
             @foreach ($modelos as $modelo)
             <tr>
                 <td>{{$modelo->Nombre}}</td>
                 <td>{{$modelo->Modalidad}}</td>
                 <td>{{$modelo->Año}}</td>
                 <td>{{$modelo->Gama}}</td>

                <td> <a href="" data-bs-toggle="modal" data-bs-target="#modalEditar{{$modelo->Nombre}}" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/3838/3838756.png" alt="editar" class="service-img" width="40" height="40"></a>
                </td>

                <td><a href="{{route("modelo.delete",$modelo->Nombre)}}" onclick="return res()" class="btn"><img src="https://cdn-icons-png.flaticon.com/128/1828/1828843.png" alt="eliminar" class="service-img" width="40" height="40"></a>
                </td>



            <!-- Modal de Modificar datos -->
            <div class="modal fade" id="modalEditar{{$modelo->Nombre}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route("modelo.update")}}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                          <label for="txtNombre" class="form-label">Nombre de Modelo</label>
                          <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtNombre" value="{{$modelo->Nombre}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtModalidad" class="form-label">Modalidad</label>
                          <input type="text" class="form-control" id="txtModalidad" aria-describedby="emailHelp" name="txtModalidad" value="{{$modelo->Modalidad}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtAño" class="form-label">Año</label>
                          <input type="text" class="form-control" id="txtAño" aria-describedby="emailHelp" name="txtAño" value="{{$modelo->Año}}">
                        </div>

                        <div class="mb-3">
                          <label for="txtGama" class="form-label">Gama</label>
                          <input type="email" class="form-control" id="txtGama" aria-describedby="emailHelp" name="txtGama" value="{{$modelo->Gama}}">
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
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto</title>
  

    <h1></h1>
    <div class="container text-center">
        <h2>Vista 1</h2>
        
        <div class="row justify-content-center">
            <br><br>
            <div class="col-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Perfil</th>
                        <th>Correo Elctronico</th>



                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $usuario) : ?>
                            <tr>
                                <td><?= $usuario->Nombre ?></td>
                                <td><?= $usuario->Apell_Paterno ?></td>
                                <td><?= $usuario->Perfil ?></td>
                                <td><?= $usuario->Correo_Elec ?></td>

                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
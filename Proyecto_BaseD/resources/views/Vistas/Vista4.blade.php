<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto</title>
  

    <h1></h1>
    <div class="container text-center">
        <h2>Vista 4</h2>
        
        <div class="row justify-content-center">
            <br><br>
            <div class="col-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>Nombre</th>
                        <th>Modalidad</th>
                        <th>Año</th>
                        <th>Gama</th>



                    </thead>
                    <tbody>
                        <?php foreach ($modelo as $modelos) : ?>
                            <tr>
                                <td><?= $modelos->Nombre ?></td>
                                <td><?= $modelos->Modalidad ?></td>
                                <td><?= $modelos->Año ?></td>
                                <td><?= $modelos->Gama ?></td>

                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
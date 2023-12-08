<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto</title>
  

    <h1></h1>
    <div class="container text-center">
        <h2>Vista 2</h2>
        
        <div class="row justify-content-center">
            <br><br>
            <div class="col-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>Nombre</th>
                        <th>Modelo</th>
                        <th>Precio</th>


                    </thead>
                    <tbody>
                        <?php foreach ($bicicleta as $bicicletas) : ?>
                            <tr>
                                <td><?= $bicicletas->Nombre ?></td>
                                <td><?= $bicicletas->Modelo ?></td>
                                <td><?= $bicicletas->Precio ?></td>

                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
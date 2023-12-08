<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto</title>

    <h1></h1>
    <div class="container text-center">
        <h2>Consulta 1</h2>
        <div class="row justify-content-center">
            <br><br>
            <div class="col-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>Bicicleta</th>
                        <th>Modelo</th>
                        <th>Gama</th>

                    </thead>
                    <tbody>
                        <?php foreach ($cantidadPorGama as $cantidadPorGamas) : ?>
                            <tr>
                                <td><?= $cantidadPorGamas->IdBicicleta ?></td>
                                <td><?= $cantidadPorGamas->Modelo ?></td>
                                <td><?= $cantidadPorGamas->Gama ?></td>
                                
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

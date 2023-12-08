<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto</title>

    <h1></h1>
    <div class="container text-center">
        <h2>Consulta 2</h2>
        <div class="row justify-content-center">
            <br><br>
            <div class="col-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>ID Marca</th>
                        <th>Marca</th>
                        <th>Pais de Origen</th>

                    </thead>
                    <tbody>
                        <?php foreach ($bicicletasPorPais as $bicicletasPorPaises) : ?>
                            <tr>
                                <td><?= $bicicletasPorPaises->IdMarca ?></td>
                                <td><?= $bicicletasPorPaises->Marca ?></td>
                                <td><?= $bicicletasPorPaises->Pais_Origen ?></td>
                                
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

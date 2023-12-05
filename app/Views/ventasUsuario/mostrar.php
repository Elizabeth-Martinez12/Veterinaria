<style>
    .box-buttons {
        display: flex;
        justify-content: space-around;
        margin-top: 20px; /* Aumentado el espacio entre la descripción y los botones */
    }

    .box-buttons a {
        text-decoration: none;
        color: #333;
        transition: color 0.3s;
    }

    .box-buttons a:hover {
        color: #007bff;
    }

    .box-buttons img {
        width: 30px;
        height: 30px;
    }

</style>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-4">Ventas Realizadas</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered"> <!-- Tabla de contenido -->
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Fecha de Venta</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($ventas as $venta) : ?> <!-- Bucle PHP para datos -->
                        <tr>
                            <td><?= $venta->nombre ?></td>
                            <td><?= $venta->cantidad ?></td>
                            <td><?= $venta->precio ?></td>
                            <td><?= $venta->fechaVenta ?></td>
                        </tr>
                    <?php endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?=base_url('index.php/ventasUsuario/buscar/'); ?>" method="GET">
            <a href="<?php echo base_url('index.php/ventasUsuario/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Buscar Venta</h2> <!-- campos de busqueda -->
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">
                <label for="cantidad">Cantidad</label>
                <input type="number" class="form-control" name="cantidad">
                <label for="precio">Precio</label>
                <input type="double" class="form-control" name="precio">
                <label for="fechaVenta">Fecha de Venta</label>
                <input type="date" class="form-control" name="fechaVenta">
                <input type="submit" 
                class="btn btn-success mt-4" value="Buscar">
                <br>
                <br>
            </form>
        </div>
    </div>
    <?php
    if(isset($ventas)){
        
    }
    ?>
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
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Fecha de Venta</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($ventas as $venta) : ?>
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
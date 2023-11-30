<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?=base_url('index.php/accesorios/buscar/'); ?>" method="GET">
            <a href="<?php echo base_url('index.php/accesorios/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Buscar Accesorio</h2>
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">
                <label for="cantidad">Cantidad</label>
                <input type="number" class="form-control" name="cantidad">
                <label for="tipo">Tipo</label>
                <input type="text" class="form-control" name="tipo">
                <label for="material">Material</label>
                <input type="text" class="form-control" name="material">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" name="categoria">
                <label for="precio">Precio</label>
                <input type="double" class="form-control" name="precio">
                <input type="submit" 
                class="btn btn-success mt-4" value="Buscar">
            </form>
        </div>
    </div>
    <?php
    if(isset($accesorios)){
        
    }
    ?>
    <div class="row">
        <div class="col-12">
        <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>IMAGENES</th>
                            <th>NOMBRE</th>
                            <th>CANTIDAD</th>
                            <th>TIPO</th>
                            <th>MATERIAL</th>
                            <th>CATEGORIA</th>
                            <th>PRECIO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($accesorios as $accesorio): ?>
                            <tr>
                                <td><img src='<?= $accesorio->ilustracion ?>' alt="Imagen del accesorio" width="auto" height="100"></td>
                                <td><?= $accesorio->nombre ?></td>
                                <td><?= $accesorio->cantidad ?></td>
                                <td><?= $accesorio->tipo ?></td>
                                <td><?= $accesorio->material ?></td>
                                <td><?= $accesorio->categoria ?></td>
                                <td><?= $accesorio->precio ?></td>
                                <td>
                                    <a href="<?= site_url('accesorios/delete/' . $accesorio->id) ?>"><img src="https://cdn.icon-icons.com/icons2/868/PNG/512/trash_bin_icon-icons.com_67981.png" width="40" height="40" /></a>
                                    <a href="<?= site_url('accesorios/editar/' . $accesorio->id) ?>"><img src="https://cdn.icon-icons.com/icons2/931/PNG/512/edit_modify_icon-icons.com_72390.png" width="50" height="50" /></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

        </div>
    </div>
</div>
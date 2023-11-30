<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?=base_url('index.php/medicamentos/buscar/'); ?>" method="GET">
            <a href="<?php echo base_url('index.php/medicamentos/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Buscar Medicamento</h2>
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" name="categoria">
                <label for="cantidad">Cantidad</label>
                <input type="number" class="form-control" name="cantidad">
                <label for="precio">Precio</label>
                <input type="decimal" class="form-control" name="precio">
                <label for="descripcion">Descripcion</label>
                <input type="text" class="form-control" name="descripcion">
                <input type="submit" 
                class="btn btn-success mt-4" value="Buscar">
                <br>
                <br>
            </form>
        </div>
    </div>
    <?php
    if(isset($medicamentos)){
        
    }
    ?>
    <div class="row">
        <div class="col-12">
        <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                <thead>
                    <th>IMAGEN</th>
                    <th>NOMBRE</th>
                    <th>CATEGORIA</th>
                    <th>CANTIDAD</th>
                    <th>PRECIO</th>
                    <th>DESCRIPCION</th>
                    <th>ACCIONES</th>
                </thead>
                <tbody>
                    <?php foreach($medicamentos as $medicamento):?>
                        <tr>
                            <td><img src='<?= $medicamento->imagen ?>' alt="Imagen del accesorio" width="auto" height="100"></td>
                            <td><?=$medicamento->nombre ?></td>
                            <td><?=$medicamento->categoria ?></td>
                            <td><?=$medicamento->cantidad ?></td>
                            <td><?=$medicamento->precio ?></td>
                            <td><?=$medicamento->descripcion ?></td>
                            <td>
                                <a href="<?=base_url('index.php/medicamentos/delete/'. $medicamento->id); ?>"><img src="https://cdn.icon-icons.com/icons2/868/PNG/512/trash_bin_icon-icons.com_67981.png" width="40" height="40" /></a>
                                <a href="<?=base_url('index.php/medicamentos/editar/'. $medicamento->id); ?>"><img src="https://cdn.icon-icons.com/icons2/931/PNG/512/edit_modify_icon-icons.com_72390.png" width="50" height="50" /></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
            </table>

        </div>
    </div>
</div>
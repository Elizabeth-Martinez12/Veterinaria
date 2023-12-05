<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?=base_url('index.php/medicamentos/buscar/'); ?>" method="GET">
            <a href="<?php echo base_url('index.php/medicamentos/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Buscar Medicamento</h2> <!-- campos de busqueda -->
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
    <style>
    .box-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin: 40px;
    }

    .box {
        width: calc(30% - 20px);
        margin: 10px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        text-align: center;
        box-sizing: border-box;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .box img {
        max-width: 100%;
        height: 150px;
        border-radius: 10px; /* Reducido el radio de borde */
        margin-bottom: 10px;
    }

    .box-description {
        margin-top: 10px;
        font-size: 16px;
    }

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

<div class="box-container">
    <?php foreach ($medicamentos as $medicamento): ?> <!-- Llama datos por medio de bucle PHP -->
        <div class="box">
            <img src='<?= $medicamento->imagen ?>' alt="Imagen del medicamento">
            <h2><?= $medicamento->nombre ?></h2>
            <p class="box-description"><?= $medicamento->categoria ?></p>
            <p class="box-description"><?= $medicamento->cantidad ?></p>
            <p class="box-description">$<?= $medicamento->precio ?></p>
            <p class="box-description"><?= $medicamento->descripcion ?></p>

            <div class="box-buttons">
                <a href="<?=base_url('index.php/medicamentos/delete/'. $medicamento->id); ?>">
                    <img src="https://cdn.icon-icons.com/icons2/868/PNG/512/trash_bin_icon-icons.com_67981.png" alt="Eliminar" />
                </a>
                <a href="<?=base_url('index.php/medicamentos/editar/'. $medicamento->id); ?>">
                    <img src="https://cdn.icon-icons.com/icons2/931/PNG/512/edit_modify_icon-icons.com_72390.png" alt="Editar" />
                </a>
            </div>
        </div>
    <?php endforeach ?>
</div>
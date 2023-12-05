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
    <?php foreach ($accesorios as $accesorio): ?> <!-- Bucle PHP para obtener datos de base de datos -->
        <div class="box">
            <img src='<?= $accesorio->ilustracion ?>' alt="Imagen del a$accesorio">
            <h2><?= $accesorio->nombre ?></h2>
            <p class="box-description"><?= $accesorio->categoria ?></p>
            <p class="box-description"><?= $accesorio->cantidad ?></p>
            <p class="box-description"><?= $accesorio->tipo ?></p>
            <p class="box-description"><?= $accesorio->material ?></p>
            <p class="box-description">$<?= $accesorio->precio ?></p>

            <div class="box-buttons">
                <a href="<?=base_url('index.php/accesorios/delete/'. $accesorio->id); ?>"> <!-- Botones de accion Eliminar y Editar -->
                    <img src="https://cdn.icon-icons.com/icons2/868/PNG/512/trash_bin_icon-icons.com_67981.png" alt="Eliminar" />
                </a>
                <a href="<?=base_url('index.php/accesorios/editar/'. $accesorio->id); ?>">
                    <img src="https://cdn.icon-icons.com/icons2/931/PNG/512/edit_modify_icon-icons.com_72390.png" alt="Editar" />
                </a>
            </div>
        </div>
    <?php endforeach ?>
</div>
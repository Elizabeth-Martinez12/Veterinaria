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
    <?php foreach ($medicamentos as $medicamento): ?> <!-- Bucle PHP para mandar a traer datos -->
        <div class="box">
            <img src='<?= $medicamento->imagen ?>' alt="Imagen del medicamento">
            <h2><?= $medicamento->nombre ?></h2>
            <p class="box-description"><?= $medicamento->categoria ?></p>
            <p class="box-description"><?= $medicamento->cantidad ?></p>
            <p class="box-description">$<?= $medicamento->precio ?></p>
            <p class="box-description"><?= $medicamento->descripcion ?></p>
        </div>
    <?php endforeach ?>
</div>
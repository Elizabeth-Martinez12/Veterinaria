<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?=base_url('index.php/accesoriosUsuario/buscar/'); ?>" method="GET">
            <a href="<?php echo base_url('index.php/accesoriosUsuario/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
            <h2>Buscar Accesorio</h2> <!-- campos de busqueda -->
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
        border-radius: 10px; 
        margin-bottom: 10px;
    }

    .box-description {
        margin-top: 10px;
        font-size: 16px;
    }

</style>

<div class="box-container">
    <?php foreach ($accesorios as $accesorio): ?> <!-- Bucle para mostrar los datos -->
        <div class="box">
            <img src='<?= $accesorio->ilustracion ?>' alt="Imagen del a$accesorio">
            <h2><?= $accesorio->nombre ?></h2>
            <p class="box-description"><?= $accesorio->categoria ?></p>
            <p class="box-description"><?= $accesorio->cantidad ?></p>
            <p class="box-description"><?= $accesorio->tipo ?></p>
            <p class="box-description"><?= $accesorio->material ?></p>
            <p class="box-description">$<?= $accesorio->precio ?></p>
        </div>
    <?php endforeach ?>
</div>
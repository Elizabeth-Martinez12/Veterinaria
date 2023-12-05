<div class="container">
    <div class= "row">
        <div class="col-3"></div>
        <div class="col-9">
            <a href="<?php echo base_url('index.php/consultas/mostrar'); ?>">
            <img src="https://cdn-icons-png.flaticon.com/512/5397/5397386.png" alt="Regresar" width="41" height="41" />
            </a>
        <h2>Agregar Consulta</h2>
            <form action="<?= base_url('index.php/consultas/insert'); ?>" method="POST"> <!-- Metodo para agregrar los datos a la tabla --->
            <?= csrf_field() ?>
                <div class="tipoConsulta"><label for="" class="form-label">Tipo de Consulta</label> <!-- Formulario --->
                <input type="text" class="form-control" name ="tipoConsulta" id="tipoConsultas">
                </div>

                <div class="nombrePaciente"><label for="" class="form-label">Nombre Paciente</label>
                <input type="text" class="form-control" name ="nombrePaciente" id="nombrePaciente">
                </div>

                <div class="tipoAnimal"><label for="" class="form-label">Tipo de Animal</label>
                <input type="text" class="form-control" name ="tipoAnimal" id="tipoAnimal">
                </div>

                <div class="nombreDueño"><label for="" class="form-label">Nombre Dueño</label>
                <input type="text" class="form-control" name ="nombreDueño" id="nombreDueño">
                </div>

                <div class="mb-3"> <!-- Llamado de datos de otra tabla de base de datos con un bucle PHP -->
                <label for="veterinario" class="form-label">Veterinario</label>
                <select name="veterinario" class="form-control">
                        <?php foreach($veterinarios as $veterinario) : ?>
                            <option value="<?=$veterinario->nombre ?>"><?=$veterinario->nombre ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="diaConsulta"><label for="" class="form-label">Dia de Consulta</label>
                <input type="date" class="form-control" name ="diaConsulta" id="diaConsulta">
                </div>

                <div class="horaConsulta"><label for="" class="form-label">Hora de Consulta</label>
                <input type="time" class="form-control" name ="horaConsulta" id="horaConsulta">
                </div>
                <br>
                
                <div class="mb-3">
                    <input type="submit" class="btn btn-success"> <!-- Boton para confirmar --->
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-4">Consultas</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>TIPO DE CONSULTA</th> <!-- Encabezados  -->
                            <th>NOMBRE DE PACIENTE</th>
                            <th>TIPO DE ANIMAL</th>
                            <th>NOMBRE DUEÑO</th>
                            <th>VETERINARIO</th>
                            <th>DIA DE CONSULTA</th>
                            <th>HORA DE CONSULTA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($consultas as $consulta) : ?> <!-- Bucle PHP para obtener los datos -->
                            <tr>
                                <td><?= $consulta->tipoConsulta ?></td>
                                <td><?= $consulta->nombrePaciente ?></td>
                                <td><?= $consulta->tipoAnimal ?></td>
                                <td><?= $consulta->nombreDueño ?></td>
                                <td><?= $consulta->veterinario ?></td>
                                <td><?= $consulta->diaConsulta ?></td>
                                <td><?= $consulta->horaConsulta ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

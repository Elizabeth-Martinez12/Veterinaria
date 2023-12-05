<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class cliente extends BaseController
{
    public function mostrar() // Funcion de mostrar la cual presenta los datos contenidos en la base de datos
{
    $clienteModel = model('ConsultasModel');
    $data['consultas'] = $clienteModel->findAll(); // Obtener todas las consultas

    return view('common/head') .
        view('common/cliente') .
        view('cliente/mostrar', $data) .
        view('common/footer');
}

   // Método para mostrar el formulario
public function agregar()
{
    $veterinariosModel = model('VeterinariosModel');
    $data['veterinarios'] = $veterinariosModel->findAll();

    return view('common/head') .
        view('common/cliente') .
        view('cliente/agregar', $data) .
        view('common/footer');
}

// Método para insertar los datos en la base de datos
public function insert() 
{
    $clienteModel = model('ConsultasModel');

    $data = [
            "tipoConsulta" => $_POST['tipoConsulta'],
            "nombrePaciente" => $_POST['nombrePaciente'],
            "tipoAnimal" => $_POST['tipoAnimal'],
            "nombreDueño" => $_POST['nombreDueño'],
            "veterinario" => $_POST['veterinario'],
            "diaConsulta" => $_POST['diaConsulta'],
            "horaConsulta" => $_POST['horaConsulta']
    ];

    $clienteModel->insert($data);

    return redirect()->to('cliente/mostrar');  
}


    public function buscar(){ // Busqueda  filtrada
        $clienteModel = model('ConsultasModel');
        if(isset($_GET['tipoConsulta'])){
            $tipoConsulta = $_GET['tipoConsulta'];
            $nombrePaciente =$_GET['nombrePaciente'];
            $tipoAnimal = $_GET['tipoAnimal'];
            $nombreDueño =$_GET['nombreDueño'];
            $diaConsulta =$_GET['diaConsulta'];
            $horaConsulta =$_GET['horaConsulta'];

            $data['consultas']= $clienteModel->like('tipoConsulta',$tipoConsulta)
                                ->Like('nombrePaciente',$nombrePaciente)
                                ->Like('tipoAnimal',$tipoAnimal)
                                ->Like('nombreDueño',$nombreDueño)
                                ->Like('diaConsulta',$diaConsulta)
                                ->Like('horaConsulta',$horaConsulta)
                                ->findAll();
        }
        else{
            $nombre = "";
            $data['consultas']=$clienteModel->findAll();
        }

        return 
            view('common/head') .
            view('common/cliente') .
            view('cliente/buscar',$data) .
            view('common/footer');
    }

}
<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Consultas extends BaseController
{
    public function index()
    {
        
    }
    public function mostrar(){

        return 
        view('common/head') .
        view('common/menu') .
        view('consultas/mostrar1',$data) .
        view('common/footer');
    }

    public function agregar(){
        helper(['form','url']);
        $consultasModel = model('ConsultasModel');
        $veterinariosModel = model('VeterinariosModel');

        $data['veterinarios'] = $veterinariosModel->findAll();

        $data['consultas'] = $consultasModel->findAll();

        $validation =  \Config\Services::validation();
        
        if ((strtolower($this->request->getMethod()) !== 'get')) {
            return 
            view('common/head') .
            view('common/menu') .
            view('consultas/agregar',$data) .
            view('common/footer');
        }

        $rules = [];

        if (! $this->validate($rules)) {
            return 
        view('common/head') .
        view('common/menu') .
        view('consultas/agregar',$data,['validation' => $validation]) .
        view('common/footer');
        }
    }

    public function insert(){
        $consultasModel = model('ConsultasModel');
        $data = [
            "tipoConsulta" => $_POST['tipoConsulta'],
            "nombrePaciente" => $_POST['nombrePaciente'],
            "tipoAnimal" => $_POST['tipoAnimal'],
            "nombreDueño" => $_POST['nombreDueño'],
            "veterinario" => $_POST['veterinario'],
            "diaConsulta" => $_POST['diaConsulta'],
            "horaConsulta" => $_POST['horaConsulta']
        ];
        $consultasModel->insert($data, false);
        return redirect('consultas/mostrar','refresh');
    }

    public function buscar(){
        $consultasModel = model('ConsultasModel');
        if(isset($_GET['tipoConsulta'])){
            $tipoConsulta = $_GET['tipoConsulta'];
            $nombrePaciente =$_GET['nombrePaciente'];
            $tipoAnimal = $_GET['tipoAnimal'];
            $nombreDueño =$_GET['nombreDueño'];
            $diaConsulta =$_GET['diaConsulta'];
            $horaConsulta =$_GET['horaConsulta'];

            $data['consultas']= $consultasModel->like('tipoConsulta',$tipoConsulta)
                                ->Like('nombrePaciente',$nombrePaciente)
                                ->Like('tipoAnimal',$tipoAnimal)
                                ->Like('nombreDueño',$nombreDueño)
                                ->Like('diaConsulta',$diaConsulta)
                                ->Like('horaConsulta',$horaConsulta)
                                ->findAll();
        }
        else{
            $nombre = "";
            $data['consultas']=$consultasModel->findAll();
        }

        return 
            view('common/head') .
            view('common/menu') .
            view('consultas/buscar',$data) .
            view('common/footer');
    }

}
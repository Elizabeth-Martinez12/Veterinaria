<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HistorialMedicoUsuario extends BaseController
{
    public function mostrar1(){ // Funcion de mostrar la cual presenta los datos contenidos en la base de datos
        $historialMedicoModel = model('HistorialMedicoModel');
        
        $data['historialMedico1'] = $historialMedicoModel->findAll();

        return 
        view('common/head') .
        view('common/cliente') .
        view('historialMedicoUsuario/mostrar1', $data) .
        view('common/footer');
    }

    public function mostrar($id){ // Misma funcion a la anterior
        $historialMedicoModel = model('HistorialMedicoModel');
        
        $data['historialMedico'] = $historialMedicoModel->find($id);

        return 
        view('common/head') .
        view('common/cliente') .
        view('historialMedicoUsuario/mostrar', $data) .
        view('common/footer');
    }

    public function agregar(){ // Funcion agregar que permite realizar inserciones a la base de datos
        helper(['form','url']);
        $historialMedicoModel = model('HistorialMedicoModel');

        $data['historialMedicoUsuario'] = $historialMedicoModel->findAll();

        $validation =  \Config\Services::validation();
        
        if ((strtolower($this->request->getMethod()) !== 'get')) {
            return 
            view('common/head') .
            view('common/cliente') .
            view('historialMedicoUsuario/agregar',$data) .
            view('common/footer');
        }

        $rules = [];

        if (! $this->validate($rules)) {
            return 
        view('common/head') .
        view('common/cliente') .
        view('historialMedicoUsuario/agregar',$data,['validation' => $validation]) .
        view('common/footer');
        }
    }

    public function insert(){ // Funcion insert es la que guarda los datos
        $historialMedicoModel = model('HistorialMedicoModel');
        $data = [
            "imagen" => $_POST['imagen'],
            "nombrePaciente" => $_POST['nombrePaciente'],
            "tipoAnimal" => $_POST['tipoAnimal'],
            "nombreDueño" => $_POST['nombreDueño'],
            "descripcion" => $_POST['descripcion'],
            "fechasConsultas" => $_POST['fechasConsultas']
        ];
        $historialMedicoModel->insert($data, false);
        return redirect('historialMedicoUsuario/mostrar1','refresh');
    }

    

    public function buscar(){ // Busqueda filtrada
        $historialMedicoModel = model('historialMedicoModel');
        if(isset($_GET['nombre'])){
            $nombre = $_GET['nombre'];
            
            

            $data['historialMedico']= $historialMedicoModel->like('nombrePaciente',$nombre)
                                ->findAll();
        }
        else{
            $nombre = "";
            $data['historialMedico']=$historialMedicoModel->findAll();
        }

        return 
            view('common/head') .
            view('common/cliente') .
            view('historialMedicoUsuario/buscar',$data) .
            view('common/footer');
    }
}

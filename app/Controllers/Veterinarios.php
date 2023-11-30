<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Veterinarios extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar(){
        $veterinariosModel = model('VeterinariosModel');
        
        $data['veterinarios'] = $veterinariosModel->findAll();
  
        return 
        view('common/head') .
        view('common/menu') .
        view('veterinarios/mostrar', $data) .
        view('common/footer');
    }

    public function agregar(){
        helper(['form','url']);
        $veterinariosModel = model('VeterinariosModel');

        $data['veterinarios'] = $veterinariosModel->findAll();

        $validation =  \Config\Services::validation();
        
        if ((strtolower($this->request->getMethod()) !== 'get')) {
            return 
            view('common/head') .
            view('common/menu') .
            view('veterinarios/agregar',$data) .
            view('common/footer');
        }

        $rules = [];

        if (! $this->validate($rules)) {
            return 
        view('common/head') .
        view('common/menu') .
        view('veterinarios/agregar',$data,['validation' => $validation]) .
        view('common/footer');
        }
    }

    public function insert(){
        $veterinariosModel = model('VeterinariosModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "apellidoPaterno" => $_POST['apellidoPaterno'],
            "apellidoMaterno" => $_POST['apellidoMaterno'],
            "correoElectronico" => $_POST['correoElectronico'],
            "telefono" => $_POST['telefono'],
            "hora_inicio" => $_POST['hora_inicio'],
            "hora_fin" => $_POST['hora_fin']
        ];
        $veterinariosModel->insert($data, false);
        return redirect('veterinarios/mostrar','refresh');
    }

    public function delete($idVeterinario){
        $veterinariosModel = model('VeterinariosModel');
        $veterinariosModel->delete($idVeterinario);
        return redirect('veterinarios/mostrar','refresh');
    }

    public function editar($idVeterinario){
        $veterinariosModel = model('VeterinariosModel');
        $data['veterinarios'] = $veterinariosModel->find($idVeterinario);

        return
        view('common/head') .
        view('common/menu') .
        view('veterinarios/editar', $data) .
        view('common/footer');
    
    }

    public function update(){
        $veterinariosModel = model('VeterinariosModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "apellidoPaterno" => $_POST['apellidoPaterno'],
            "apellidoMaterno" => $_POST['apellidoMaterno'],
            "correoElectronico" => $_POST['correoElectronico'],
            "telefono" => $_POST['telefono'],
            "hora_inicio" => $_POST['hora_inicio'],
            "hora_fin" => $_POST['hora_fin']
        ];
        
        $veterinariosModel->update($_POST['id'],$data);
        return redirect('veterinarios/mostrar','refresh');
    }

    public function buscar(){
        $veterinariosModel = model('VeterinariosModel');
        if(isset($_GET['nombre'])){
            $nombre = $_GET['nombre'];
            $apellidoPaterno =$_GET['apellidoPaterno'];
            $apellidoMaterno = $_GET['apellidoMaterno'];
            $correoElectronico =$_GET['correoElectronico'];
            $telefono =$_GET['telefono'];
            $hora_inicio =$_GET['hora_inicio'];
            $hora_fin =$_GET['hora_fin'];          

            $data['veterinarios']= $veterinariosModel->like('nombre',$nombre)
                                ->Like('apellidoPaterno',$apellidoPaterno)
                                ->Like('apellidoMaterno',$apellidoMaterno)
                                ->Like('correoElectronico',$correoElectronico)
                                ->Like('telefono',$telefono)
                                ->Like('hora_inicio',$hora_inicio)
                                ->Like('hora_fin',$hora_fin)
                                ->findAll();
        }
        else{
            $nombre = "";
            $data['veterinarios']=$veterinariosModel->findAll();
        }

        return 
            view('common/head') .
            view('common/menu') .
            view('veterinarios/buscar',$data) .
            view('common/footer');
    }

}


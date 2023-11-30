<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Medicamentos extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar(){
        $medicamentosModel = model('MedicamentosModel');
        
        $data['medicamentos'] = $medicamentosModel->findAll();

        return 
        view('common/head') .
        view('common/menu') .
        view('medicamentos/mostrar', $data) .
        view('common/footer');
    }

    public function agregar(){
        helper(['form','url']);
        $medicamentosModel = model('MedicamentosModel');

        $data['medicamentos'] = $medicamentosModel->findAll();

        $validation =  \Config\Services::validation();
        
        if ((strtolower($this->request->getMethod()) !== 'get')) {
            return 
            view('common/head') .
            view('common/menu') .
            view('medicamentos/agregar',$data) .
            view('common/footer');
        }

        $rules = [];

        if (! $this->validate($rules)) {
            return 
        view('common/head') .
        view('common/menu') .
        view('medicamentos/agregar',$data,['validation' => $validation]) .
        view('common/footer');
        }
    }

    public function insert(){
        $medicamentosModel = model('MedicamentosModel');
        $data = [
            "imagen" => $_POST['imagen'],
            "nombre" => $_POST['nombre'],
            "categoria" => $_POST['categoria'],
            "cantidad" => $_POST['cantidad'],
            "precio" => $_POST['precio'],
            "descripcion" => $_POST['descripcion']
        ];
        $medicamentosModel->insert($data, false);
        return redirect('medicamentos/mostrar','refresh');
    }

    public function delete($idMedicamento){
        $medicamentosModel = model('MedicamentosModel');
        $medicamentosModel->delete($idMedicamento);
        return redirect('medicamentos/mostrar','refresh');
    }

    public function editar($idMedicamento){
        $medicamentosModel = model('MedicamentosModel');
        $data['medicamento'] = $medicamentosModel->find($idMedicamento);

        return
        view('common/head') .
        view('common/menu') .
        view('medicamentos/editar', $data) .
        view('common/footer');
    
    }

    public function update(){
        $medicamentosModel = model('MedicamentosModel');
        $data = [
            "imagen" => $_POST['imagen'],
            "nombre" => $_POST['nombre'],
            "categoria" => $_POST['categoria'],
            "cantidad" => $_POST['cantidad'],
            "precio" => $_POST['precio'],
            "descripcion" => $_POST['descripcion']
        ];
        
        $medicamentosModel->update($_POST['id'],$data);
        return redirect('medicamentos/mostrar','refresh');
    }

    public function buscar(){
        $medicamentosModel = model('MedicamentosModel');
        if(isset($_GET['nombre'])){
            $nombre = $_GET['nombre'];
            $categoria=$_GET['categoria'];
            $cantidad = $_GET['cantidad'];
            $precio =$_GET['precio'];
            $descripcion =$_GET['descripcion'];
            

            $data['medicamentos']= $medicamentosModel->like('nombre',$nombre)
                                ->Like('categoria',$categoria)
                                ->Like('cantidad',$cantidad)
                                ->Like('precio',$precio)
                                ->Like('descripcion',$descripcion)
                                ->findAll();
        }
        else{
            $nombre = "";
            $data['medicamentos']=$medicamentosModel->findAll();
        }

        return 
            view('common/head') .
            view('common/menu') .
            view('medicamentos/buscar',$data) .
            view('common/footer');
    }

}
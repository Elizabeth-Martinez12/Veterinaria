<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Medicamentos extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar(){ // Funcion de mostrar la cual presenta los datos contenidos en la base de datos
        $medicamentosModel = model('MedicamentosModel');
        
        $data['medicamentos'] = $medicamentosModel->findAll();

        return 
        view('common/head') .
        view('common/menu') .
        view('medicamentos/mostrar', $data) .
        view('common/footer');
    }

    public function agregar(){ // Funcion agregar que permite realizar inserciones a la base de datos
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

    public function insert(){ // Funcion insert es la que guarda los datos
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

    public function delete($idMedicamento){ // Eliminar registro
        $medicamentosModel = model('MedicamentosModel');
        $medicamentosModel->delete($idMedicamento);
        return redirect('medicamentos/mostrar','refresh');
    }

    public function editar($idMedicamento){ // Modificar registro
        $medicamentosModel = model('MedicamentosModel');
        $data['medicamento'] = $medicamentosModel->find($idMedicamento);

        return
        view('common/head') .
        view('common/menu') .
        view('medicamentos/editar', $data) .
        view('common/footer');
    
    }

    public function update(){ // Guardar cambios
        $medicamentosModel = model('MedicamentosModel');
        $data = [
            "imagen" => $_POST['imagen'],
            "nombre" => $_POST['nombre'],
            "categoria" => $_POST['categoria'],
            "cant0.idad" => $_POST['cantidad'],
            "precio" => $_POST['precio'],
            "descripcion" => $_POST['descripcion']
        ];
        
        $medicamentosModel->update($_POST['id'],$data);
        return redirect('medicamentos/mostrar','refresh');
    }

    public function buscar(){ // Busqueda filtrada
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
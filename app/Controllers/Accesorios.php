<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Accesorios extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar(){ // Funcion de mostrar la cual presenta los datos contenidos en la base de datos
        $accesoriosModel = model('AccesoriosModel');
        
        $data['accesorios'] = $accesoriosModel->findAll();

        return 
        view('common/head') .
        view('common/menu') .
        view('accesorios/mostrar', $data) .
        view('common/footer');
    }

    public function agregar(){ // Funcion agregar que permite realizar inserciones a la base de datos
        helper(['form','url']);
        $accesoriosModel = model('AccesoriosModel');

        $data['accesorios'] = $accesoriosModel->findAll();

        $validation =  \Config\Services::validation();
        
        if ((strtolower($this->request->getMethod()) !== 'get')) {
            return 
            view('common/head') .
            view('common/menu') .
            view('accesorios/agregar',$data) .
            view('common/footer');
        }

        $rules = [];

        if (! $this->validate($rules)) {
            return 
        view('common/head') .
        view('common/menu') .
        view('accesorios/agregar',$data,['validation' => $validation]) .
        view('common/footer');
        }
    }

    public function insert(){ // Funcion insert es la que guarda los datos
        $accesoriosModel = model('AccesoriosModel');
        $data = [
            "ilustracion" => $_POST['ilustracion'],
            "nombre" => $_POST['nombre'],
            "cantidad" => $_POST['cantidad'],
            "tipo" => $_POST['tipo'],
            "material" => $_POST['material'],
            "categoria" => $_POST['categoria'],
            "precio" => $_POST['precio']
        ];
        $accesoriosModel->insert($data, false);
        return redirect('accesorios/mostrar','refresh');
    }

    public function delete($idAccesorios){ // Eliminar registro
        $accesoriosModel = model('AccesoriosModel');
        $accesoriosModel->delete($idAccesorios);
        return redirect('accesorios/mostrar','refresh');
    }

    public function editar($idAccesorios){ // Modificar registro
        $accesoriosModel = model('AccesoriosModel');
        $data['accesorios'] = $accesoriosModel->find($idAccesorios);

        return
        view('common/head') .
        view('common/menu') .
        view('accesorios/editar', $data) .
        view('common/footer');
    
    }

    public function update(){ // Guardar cambios
        $accesoriosModel = model('AccesoriosModel');
        $data = [
            "ilustracion" => $_POST['ilustracion'],
            "nombre" => $_POST['nombre'],
            "cantidad" => $_POST['cantidad'],
            "tipo" => $_POST['tipo'],
            "material" => $_POST['material'],
            "categoria" => $_POST['categoria'],
            "precio" => $_POST['precio']
        ];
        
        $accesoriosModel->update($_POST['id'],$data);
        return redirect('accesorios/mostrar','refresh');
    }

    public function buscar(){ // Busqueda filtrada
        $accesoriosModel = model('AccesoriosModel');
        if(isset($_GET['nombre'])){
            $nombre=$_GET['nombre'];
            $cantidad = $_GET['cantidad'];
            $tipo=$_GET['tipo'];
            $material=$_GET['material'];
            $categoria=$_GET['categoria'];
            $precio=$_GET['precio'];

            

            $data['accesorios']= $accesoriosModel->Like('nombre',$nombre)
                                ->Like('cantidad',$cantidad)
                                ->Like('tipo',$tipo)
                                ->Like('material',$material)
                                ->Like('categoria',$categoria)
                                ->Like('precio',$precio)
                                ->findAll();
        }
        else{
            $ilustracion = "";
            $data['accesorios']=$accesoriosModel->findAll();
        }

        return 
            view('common/head') .
            view('common/menu') .
            view('accesorios/buscar',$data) .
            view('common/footer');
    }

}
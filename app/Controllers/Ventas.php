<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VentasModel;

class Ventas extends BaseController
{

    public function mostrar() // Funcion de mostrar la cual presenta los datos contenidos en la base de datos
    {
        $ventasModel = new VentasModel();
        $data['ventas'] = $ventasModel->findAll();

        return
            view('common/head') .
            view('common/menu') .
            view('ventas/mostrar', $data) .
            view('common/footer');
    }

    public function agregar() // Funcion agregar que permite realizar inserciones a la base de datos
    {
        helper(['form', 'url']);
        $medicamentosModel = model('MedicamentosModel');
        $accesoriosModel = model('AccesoriosModel');

        $data['medicamentos'] = $medicamentosModel->findAll();
        $data['accesorios'] = $accesoriosModel->findAll();

        $validation = \Config\Services::validation();

        if (strtolower($this->request->getMethod()) !== 'get') {
            return
                view('common/head') .
                view('common/menu') .
                view('ventas/agregar', $data) .
                view('common/footer');
        }

        $rules = [
        ];

        if (!$this->validate($rules)) {
            return
                view('common/head') .
                view('common/menu') .
                view('ventas/agregar', $data, ['validation' => $validation]) .
                view('common/footer');
        }
    }

        public function insert() // Funcion insert es la que guarda los datos
    {
        $ventasModel = model('VentasModel');
        $data = [
        "id" => $this->request->getPost('id'),
        "nombre" => $this->request->getPost('nombre'), 
        "cantidad" => $this->request->getPost('cantidad'),
        "precio" => $this->request->getPost('precio'),
        "precioTotal" => $this->request->getPost('precioTotal'),
        "fechaVenta" => $this->request->getPost('fechaVenta')
        ];
        $ventasModel->insert($data);
        return redirect()->to('ventas/mostrar');
}


    public function delete($id){ // Eliminar registro
        $ventasModel = model('ventasModel');
        $ventasModel->delete($id);
        return redirect('ventas/mostrar','refresh');
    }
    public function buscar(){ // Buscar registro
        $ventasModel = model('VentasModel');
        if(isset($_GET['nombre'])){
            $nombre = $_GET['nombre'];
            $cantidad =$_GET['cantidad'];
            $precio = $_GET['precio'];
            $fechaVenta =$_GET['fechaVenta'];
            

            $data['ventas']= $ventasModel->like('nombre',$nombre)
                                ->Like('cantidad',$cantidad)
                                ->Like('precio',$precio)
                                ->Like('fechaVenta',$fechaVenta)
                                ->findAll();
        }
        else{
            $nombre = "";
            $data['ventas']=$ventasModel->findAll();
        }

        return 
            view('common/head') .
            view('common/menu') .
            view('ventas/buscar',$data) .
            view('common/footer');
    }

    public function editar($id){ // Editar registro
        $ventasModel = model('VentasModel');
        $data['ventas'] = $ventasModel->find($id);

        return
        view('common/head') .
        view('common/menu') .
        view('ventas/editar', $data) .
        view('common/footer');
    
    }

    public function update(){ // Guardar cambios
        $ventasModel = model('VentasModel');
        $data = [
            "id" => $this->request->getPost('id'),
            "nombre" => $this->request->getPost('nombre'), 
            "cantidad" => $this->request->getPost('cantidad'),
            "precio" => $this->request->getPost('precio'),
            "precioTotal" => $this->request->getPost('precioTotal'),
            "fechaVenta" => $this->request->getPost('fechaVenta')
        ];
        
        $ventasModel->update($_POST['id'],$data);
        return redirect('ventas/mostrar','refresh');
    }

}

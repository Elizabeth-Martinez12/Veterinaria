<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AccesoriosUsuarios extends BaseController
{
    public function mostrar(){ // Funcion de mostrar la cual presenta los datos contenidos en la base de datos
        $accesoriosModel = model('AccesoriosModel');
        
        $data['accesorios'] = $accesoriosModel->findAll();

        return 
        view('common/head') .
        view('common/cliente') .
        view('accesoriosUsuario/mostrar', $data) .
        view('common/footer');
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
            view('common/cliente') .
            view('accesoriosUsuario/buscar',$data) .
            view('common/footer');
    }
}

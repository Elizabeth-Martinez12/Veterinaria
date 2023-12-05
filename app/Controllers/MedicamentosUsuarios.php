<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MedicamentosUsuarios extends BaseController
{
    public function mostrar(){ // Funcion de mostrar la cual presenta los datos contenidos en la base de datos
        $medicamentosModel = model('MedicamentosModel');
        
        $data['medicamentos'] = $medicamentosModel->findAll();

        return 
        view('common/head') .
        view('common/cliente') .
        view('medicamentosUsuario/mostrar', $data) .
        view('common/footer');
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
            view('common/cliente') .
            view('medicamentosUsuario/buscar',$data) .
            view('common/footer');
    }


}

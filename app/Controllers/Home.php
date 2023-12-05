<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        $data['title'] = "Agregar";
        $validation = \Config\Services::validation();

        if (strtolower($this->request->getMethod()) === 'get') {
            return view('common/head') .
                view('home/home') .
                view('common/footer');
        }

        $rules = [
            'nombre' => 'required',
            'contrasenia' => 'required'
        ];

        if (!$this->validate($rules)) {
            return view('common/head') .
                view('home/home') .
                view('common/footer');
        } else {
            // Si pasa las reglas
            $nombre = $this->request->getPost('nombre');
            $contrasenia = $this->request->getPost('contrasenia');
            $userModel = model('UserModel');
            $data['home'] = $userModel->like('nombre', $nombre)
                ->like('contrasenia', $contrasenia)
                ->findAll();

                if (count($data['home']) > 0) {
                    // Crear la sesión
                    $session = session();
        
                    $newdata = [
                        'id' => $data['home'][0]->id,
                        'nombre' => $data['home'][0]->nombre,
                        'rol' => $this->request->getPost('rol'),
                        'logged_in' => true,
                    ];
        
                    $session->set($newdata);

                    // Redireccionar según el valor de "rol"
                    $rol = $this->request->getPost('rol');
                    switch ($rol) {
                    case 'Administrador':
                    return redirect()->to('consultas/mostrar');
                    case 'Usuario':
                    return redirect()->to('cliente/mostrar');
                    default:
                    return redirect()->to('consultas/mostrar');
            }
        } else {
            return redirect()->to('consultas/mostrar');
        }
    }

    }
}

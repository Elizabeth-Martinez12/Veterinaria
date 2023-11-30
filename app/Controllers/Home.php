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
                    'logged_in' => true,
                ];

                $session->set($newdata);

                return redirect()->to('consultas/mostrar');
            } else {
                return redirect()->to('consultas/mostrar');
            }
        }
    }
}

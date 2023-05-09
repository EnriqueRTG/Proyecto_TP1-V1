<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{
    public function obtenerUsuarios()
    {
        $data = [ 
            'title' => 'Usuario - Tattoo Supply Store',
            
        ];

        $usuarioModel = new UsuarioModel();
        $usuarios = $usuarioModel->obtenerUsuarios();

        // Pasaq los datos de los usuarios a la vista
        return view('/components/header', $data)
                .view('/components/navbar-cliente')
                .view('/pages/back-usuarios/listar-usuarios', ['usuario' => $usuarios])
                .view('components/footer-cliente');
    }

    public function registro()
    {
        $data = [];

        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'nombre' => 'required|min_length[3]|max_length[255]',
                'email' => 'required|valid_email|is_unique[usuarios.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'confirm_password' => 'matches[password]'
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UsuarioModel();

                $newData = [
                    'nombre' => $this->request->getVar('nombre'),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Registro exitoso');
                return redirect()->to('/');
            }
        }

        echo view('templates/header', $data);
        echo view('registro-usuario');
        echo view('templates/footer');
    }
} 
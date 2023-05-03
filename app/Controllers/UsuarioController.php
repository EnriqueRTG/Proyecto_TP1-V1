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
} 
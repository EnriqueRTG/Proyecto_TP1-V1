<?php

namespace App\Controllers;

class Comercializacion extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Comercializacion - Tattoo Supply Store',
        ];

        return view('/components/header', $data) . view('/components/navbar-cliente', $data) . view('/pages/comercializacion-vista') . view('/components/footer-cliente');
    }

    public function metodos()
    {
        return redirect()->to(base_url('comercializacion#metodos'));
    }
}

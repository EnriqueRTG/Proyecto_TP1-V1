<?php

namespace App\Controllers;

class Contacto extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Contacto - Tattoo Supply Store',
        ];

        return view('/components/header', $data) . view('/components/navbar-cliente', $data) . view('/pages/contacto-vista') . view('/components/footer-cliente');
    }

    public function ubicacion()
    {
        return redirect()->to(base_url('contacto#ubicacion'));
    }
}

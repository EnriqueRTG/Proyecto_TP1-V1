<?php

namespace App\Controllers;

class Contacto extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Contacto - Tattoo Supply Store',
        ];

        return view('/components/header', $data) . view('/components/navbar', $data) . view('/pages/contacto-vista') . view('/components/footer');
    }

    public function ubicacion()
    {
        return redirect()->to(site_url('contacto#ubicacion'));
    }
}

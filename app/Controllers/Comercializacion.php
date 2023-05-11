<?php

namespace App\Controllers;

class Comercializacion extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Comercializacion - Tattoo Supply Store',
        ];

        return view('/components/header', $data) . view('/components/navbar', $data) . view('/pages/comercializacion-vista') . view('/components/footer');
    }

    public function metodos()
    {
        return redirect()->to(site_url('comercializacion#metodos-de-pago'));
    }
}

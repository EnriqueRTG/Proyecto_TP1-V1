<?php

namespace App\Controllers;

class Catalogo extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Catalogo - Tattoo Supply Store',
        ];

        return view('/components/header', $data) . view('/components/navbar-cliente', $data) . view('/pages/catalogo') . view('/components/footer-cliente');
    }
}

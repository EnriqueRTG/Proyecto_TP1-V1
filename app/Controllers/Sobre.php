<?php

namespace App\Controllers;

class Sobre extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Sobre Nosotros - Tattoo Supply Store',
        ];

        return view('/components/header', $data) . view('/components/navbar-cliente', $data) . view('/pages/sobre', $data) . view('/components/footer-cliente');
    }
}

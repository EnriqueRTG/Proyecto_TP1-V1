<?php

namespace App\Controllers;

class Producto extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Producto - Tattoo Supply Store',
        ];

        return view('/components/header', $data) . view('/components/navbar-cliente', $data) . view('/pages/producto') . view('/components/footer-cliente');
    }
}

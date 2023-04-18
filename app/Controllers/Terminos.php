<?php

namespace App\Controllers;

class Terminos extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Terminos y Condiciones - Tattoo Supply Store',
        ];

        return view('/components/header', $data) . view('/components/navbar-cliente', $data) . view('/pages/terminos', $data) . view('/components/footer-cliente');
    }
}

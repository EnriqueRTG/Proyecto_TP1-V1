<?php

namespace App\Controllers;

class Garantia extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Garantia - Tattoo Supply Store',
        ];

        return view('/components/header', $data) . view('/components/navbar-cliente', $data) . view('/pages/garantia-vista', $data) . view('/components/footer-cliente');
    }
}
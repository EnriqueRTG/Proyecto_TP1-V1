<?php

namespace App\Controllers;

class Terminos extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Terminos y Condiciones - Tattoo Supply Store',
        ];

        return view('/components/header', $data) . view('/components/navbar', $data) . view('/pages/terminos-vista', $data) . view('/components/footer');
    }
}

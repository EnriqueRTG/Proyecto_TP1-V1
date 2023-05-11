<?php

namespace App\Controllers;

class Nosotros extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Sobre Nosotros - Tattoo Supply Store',
        ];

        return view('/components/header', $data) . view('/components/navbar', $data) . view('/pages/nosotros-vista', $data) . view('/components/footer');
    }
}

<?php

namespace App\Controllers;

class Principal extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Principal - Tattoo Supply Store',
        ];

        return view('/components/header', $data) . view('/components/navbar', $data) . view('/pages/principal-vista', $data) . view('/components/footer');
    }
}

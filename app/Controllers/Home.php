<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Principal - Under The Skin',
        ];

        return view('/components/head', $data).view('/components/navbar-cliente', $data).view('/components/carousel', $data).view('/components/header').view('/pages/principal').view('/components/footer-cliente');
    }
}

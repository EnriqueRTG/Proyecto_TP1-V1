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

        return view('/components/head', $data) . view('/components/navbar-cliente', $data) . view('/components/carousel', $data) .  view('/secctions/home-welcome-secction') . view('/secctions/home-fecture-secction') . view('/components/footer-cliente');
    }

}

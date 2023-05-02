<?php

namespace App\Controllers;

class Panel extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Panel - Tattoo Supply Store',
        ];

        return  view('/components/header-admin', $data) . view('/components/navbar-admin') . view('/pages/panel') . view('/components/footer-admin');
    }

    public function graficos()
    {
        $data = [
            'title' =>  'Graficos - Tattoo Supply Store',
        ];

        return  view('/components/header-admin', $data) . view('/components/graficos') . view('/components/footer-admin');
    }

    public function tablas()
    {
        $data = [
            'title' =>  'Tablas - Tattoo Supply Store',
        ];

        return  view('/components/header-admin', $data) . view('/components/tablas') . view('/components/footer-admin');
    }
}
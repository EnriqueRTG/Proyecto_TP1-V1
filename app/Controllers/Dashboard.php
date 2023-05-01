<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Dashboard - Tattoo Supply Store',
        ];

        return  view('/components/header-admin', $data) . view('/components/navbar-admin') . view('/pages/dashboard') . view('/components/footer-admin');
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

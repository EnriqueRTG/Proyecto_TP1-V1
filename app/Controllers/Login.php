<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function ingreso()
    {
        $data = [
            'title' =>  'Ingreso - Tattoo Supply Store',
        ];

        return view('/components/header', $data). view('/components/ingreso');
    }

    public function registro()
    {
        $data = [
            'title' =>  'Registro - Tattoo Supply Store',
        ];

        return view('/components/header', $data). view('/components/registro');
    }

    public function recuperacion()
    {
        $data = [
            'title' =>  'Recuperacion - Tattoo Supply Store',
        ];

        return view('/components/header', $data). view('/components/recuperacion');
    }
}

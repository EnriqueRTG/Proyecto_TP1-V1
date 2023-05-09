<?php

namespace App\Controllers;

class CarritoController extends BaseController
{
    public function index (){
        $data = [
            'title' =>  'Carrito - Tattoo Supply Store',
        ];

        return view('/components/header', $data) . view('/components/navbar-cliente', $data) . view('/components/carrito') . view('/components/footer-cliente');
    }
}

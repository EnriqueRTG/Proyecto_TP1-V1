<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Principal extends BaseController
{
    public function index($page = 'principal')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // No se encontro la pagina.
            throw new PageNotFoundException($page);
        }

        $mensaje = session('mensaje');

        $data['title'] = ucfirst($page); //Capitaliza la primera letra

        return view('/components/header', $data) . view('/components/navbar') . view('pages/' . $page, ["mensaje" => $mensaje]) . view('/components/footer');
    }

    public function fallo()
    {
        return view('/pages/fallo');
    }
}

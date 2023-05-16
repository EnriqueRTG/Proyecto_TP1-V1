<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Contacto extends BaseController
{
    public function index($page = 'contacto')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // No se encontro la pagina.
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); //Capitaliza la primera letra

        return view('/components/header', $data) . view('/components/navbar') . view('pages/' . $page) . view('/components/footer');
    }

    public function obtenerUbicacion()
    {
        return redirect()->to(base_url('contacto#ubicacion'));
    }
}

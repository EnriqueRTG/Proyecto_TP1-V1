<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Terminos extends BaseController
{
    public function index($page = 'terminos')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // No se encontro la pagina.
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); //Capitaliza la primera letra

        return view('/components/header', $data) . view('/components/navbar') . view('/pages/terminos', $data) . view('/components/footer');
    }
}

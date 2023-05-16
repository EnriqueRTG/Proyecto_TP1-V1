<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Panel extends BaseController
{
    public function index($page = 'panel')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // No se encontro la pagina.
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); //Capitaliza la primera letra

        return  view('/components/header-panel', $data) . view('components/navbar-panel') . view('pages/' . $page, $data) . view('/components/footer-panel');
    }

    public function obtenerGraficos($page = 'graficos')
    {
        if (!is_file(APPPATH . 'Views/components/' . $page . '.php')) {
            // No se encontro la pagina.
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); //Capitaliza la primera letra

        return  view('/components/header-panel', $data) . view('components/navbar-panel') . view('components/' . $page) . view('/components/footer-panel');
    }

    public function obtenerTablas($page = 'tablas')
    {
        if (!is_file(APPPATH . 'Views/components/' . $page . '.php')) {
            // No se encontro la pagina.
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); //Capitaliza la primera letra

        return  view('/components/header-panel', $data) . view('components/navbar-panel') . view('components/' . $page) . view('/components/footer-panel');
    }
}

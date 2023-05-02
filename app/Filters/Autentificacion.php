<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Authenticacion implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        //si el usuario no esta logeado
        if (!session()->get('logged_in')) {
            //redirigir a la pagina de logeo
            return redirect()->to('/components/ingreso');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //hacer algo aca


    }
}

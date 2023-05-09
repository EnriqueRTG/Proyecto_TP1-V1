<?php

namespace App\Controllers;

class RedirectController  extends BaseController
{
    public function ubicacion()
    {
        return redirect()->to(site_url('pages/contacto-vista') . '#ubicacion');
    }
}

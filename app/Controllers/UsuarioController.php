<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class UsuarioController extends BaseController
{
    public function index($page = 'registro')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // No se encontro la pagina.
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); //Capitaliza la primera letra


        return view('/components/header', $data) . view('/components/navbar') . view('pages/' . $page) . view('/components/footer');
    }

    public function ingresar()
    {
        $username = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        $usuarioModel = new UsuarioModel();

        $usuario = $usuarioModel->obtenerUsuarioPorUsername($username);

        if (!$usuario || !password_verify($password, $usuario['pass'])) {
            // Las credenciales no son válidas, redirigir de vuelta al formulario de inicio de sesión con un mensaje de error
            return redirect()->back()->withInput()->with('error', 'Credenciales inválidas');
        }

        // Las credenciales son válidas, guardar los datos del usuario en la sesión
        $userData = [
            'id'         => $usuario['id'],
            'nombre'     => $usuario['nombre'],
            'apellido'   => $usuario['apellido'],
            'email'      => $usuario['email'],
            'usuario'    => $usuario['usuario'],
            'perfil_id'  => $usuario['perfil_id'],
            'baja'       => $usuario['baja'],
            'fecha_alta' => $usuario['fecha_alta'],
            'fecha_modificacion' => $usuario['fecha_modificacion']
        ];

        $this->session->set('datosUsuario', $userData);

        // Redirigir a diferentes vistas según el valor del campo 'perfil_id'
        if ($usuario['perfil_id'] == 1) {
            return redirect()->to('/panel')->with('success', 'Sesión válida como Admin');
        } else if ($usuario['perfil_id'] == 2) {
            return redirect()->to('/fallo')->with('success', 'Sesión Inválida');
        }

        return redirect()->to('/fallo');
    }

    public function ingreso()
    {

        $data['title'] = ucfirst("panel"); //Capitaliza la primera letra

        $mensaje = session('mensaje');

        return view('/components/header-panel', $data) . view('/components/navbar-panel') . view('pages/panel', ["mensaje" => $mensaje]) . view('/components/footer-panel');
    }

    public function obtenerUsuarios()
    {
        $data = [
            'title' => 'Usuario - Tattoo Supply Store',

        ];

        $usuarioModel = new UsuarioModel();
        $usuarios = $usuarioModel->obtenerUsuarios();

        // Pasa los datos de los usuarios a la vista
        return view('/components/header', $data)
            . view('/components/navbar-cliente')
            . view('/pages/back-usuarios/listar-usuarios', ['usuario' => $usuarios])
            . view('components/footer-cliente');
    }
}

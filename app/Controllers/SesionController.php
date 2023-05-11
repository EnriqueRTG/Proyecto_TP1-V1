<?php

namespace App\Controllers;

class SesionController extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'ingreso - Tattoo Supply Store',
        ];
        return view('/components/header', $data) . view('/components/navbar', $data) . view('/components/ingreso') . view('/components/footer');
    }

    public function procesar()
    {
        $validationRules = [
            'user' => 'required',
            'password' => 'required'
        ];

        $validationMessages = [
            'user' => [
                'required' => 'El campo usuario es obligatorio.'
            ],
            'password' => [
                'required' => 'El campo contraseña es obligatorio.'
            ]
        ];

        if ($this->validate($validationRules, $validationMessages)) {
            // Los campos son válidos, procede con la validación del inicio de sesión
            $user = $this->request->getPost('user');
            $password = $this->request->getPost('password');

            // Validar las credenciales del usuario
            if ($this->validarCredenciales($user, $password)) {
                // Inicio de sesión exitoso

                // Guardar estado de sesión
                session()->set('isLoggedIn', true);

                // Redirigir a la página principal o a la página deseada
                return redirect()->to('/');
            } else {
                // Credenciales inválidas
                return redirect()->back()->with('error', 'Credenciales inválidas.');
            }
        } else {
            // Los campos no son válidos
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function cerrarSesion()
    {
        // Limpiar el estado de sesión al cerrar la sesión
        session()->remove('isLoggedIn');

        // Redirigir a la página principal o a la página deseada
        return redirect()->to('/');
    }

    private function validarCredenciales($user, $password)
    {
        // Aquí debes implementar tu lógica para validar las credenciales del usuario
        // Puedes verificar las credenciales en la base de datos, por ejemplo

        // Simulamos una validación exitosa en este ejemplo
        $credencialesValidas = ($user === 'user' && $password === 'password');

        return $credencialesValidas;
    }




    public function registrar()
    {
        $data = [
            'title' =>  'Registro - Tattoo Supply Store',
        ];
        return view('/components/header', $data) . view('/components/navbar', $data) . view('/components/registro') . view('/components/footer');
    }


    public function recuperacion()
    {
        $data = [
            'title' =>  'Recuperacion - Tattoo Supply Store',
        ];

        return view('/components/header', $data) . view('/components/recuperacion');
    }
}

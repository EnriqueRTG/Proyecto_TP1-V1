<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class RegistroUsuario extends Controller
{
public function index()
    {
        $data = [];

        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'nombre' => 'required|min_length[3]|max_length[255]',
                'email' => 'required|valid_email|is_unique[usuarios.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'confirm_password' => 'matches[password]'
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UsuarioModel();

                $newData = [
                    'nombre' => $this->request->getVar('nombre'),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Registro exitoso');
                return redirect()->to('/');
            }
        }

        echo view('templates/header', $data);
        echo view('registro-usuario');
        echo view('templates/footer');
    }
}

// Ahora, en tu modelo o controlador, puedes utilizar la conexión a la base de datos a través del objeto $this->db. Por ejemplo, para obtener todos los registros de una tabla, puedes hacer lo siguiente:
// $query = $this->db->query("SELECT * FROM mi_tabla");
// $results = $query->getResult();
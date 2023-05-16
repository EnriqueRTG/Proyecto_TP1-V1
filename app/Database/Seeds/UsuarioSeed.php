<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeed extends Seeder
{
    public function run()
    {
        $nombre = "Cosme";
        $apellido = "Fulanito";
        $email = "admin@gmail.com";
        $usuario = "admin";
        $pass = password_hash("123", PASSWORD_BCRYPT);
        $perfil_id = 1;
        $fecha_alta = date('Y-m-d');

        $data = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email' => $email,
            'usuario'    => $usuario,
            'pass' => $pass,
            'perfil_id'    => $perfil_id,
            'fecha_alta' =>  $fecha_alta,
            
        ];

        // Using Query Builder
        $this->db->table('usuario')->insert($data);
    }
}

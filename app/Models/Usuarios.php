<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nombre', 'email', 'password'];

    protected $validationRules = [
        'nombre' => 'required|min_length[3]|max_length[255]',
        'email' => 'required|valid_email|is_unique[usuarios.email]',
        'password' => 'required|min_length[8]|max_length[255]'
    ];
    protected $validationMessages = [
        'email' => [
            'is_unique' => 'Ya existe una cuenta con ese email'
        ]
    ];
}

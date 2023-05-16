<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'apellido', 'email', 'usuario', 'pass', 'perfil_id', 'baja','fecha_alta','fecha_modificacion'];

    // Metodo para agregar un usuario a la base de datos
    public function crearUsuario($data)
    {
        $buldier = $this->db->table($this->table);
        $buldier->insert($data);

        return $this->db->insertID();
    }

    // Metodo para obtener datos de un usuario
    public function obtenerUsuarioPorUsername($username)
    {
        return $this->where('usuario', $username)->first();
    }


    // Metodo para obtener un usuario por su ID
    public function obtenerUsuarioID($id)
    {
        $buldier = $this->db->table($this->table);
        $buldier->where('id',$id);
        $query = $buldier->get();

        return $query->getRowArray();
    }

    // Metodo para actualizar un usuario existente
    public function actualizarUsuario($id, $data)
    {
        $buldier = $this->db->table($this->table);
        $buldier->where('id', $id);
        $buldier->update($data);
        $query = $buldier->get();

        return $query->getResultArray();
    }

    // Metodo para obtener todos los usuarios de la base de datos
    public function obtenerUsuarios()
    {
        $buldier = $this->db->table($this->table);
        $query = $buldier->get();

        return $query->getResultArray();
    }

}

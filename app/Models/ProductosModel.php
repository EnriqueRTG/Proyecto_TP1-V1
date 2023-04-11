<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model
{
    protected $table      = 'productos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'descripcion', 'precio'];

    public function findAllProductos()
    {
        return $this->findAll();
    }

    public function findProductosConPrecioMayorA($valor)
    {
        return $this->where('precio >', $valor)->findAll();
    }
}

<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Productos extends Controller
{
    public function __construct()
    {
        $this->productosModel = model('app/Models/ProductosModel');
    }

    public function listar()
    {
        // Obtener los productos de la base de datos
        $productos = $this->productosModel->findAllProductos();

        // Cargar la vista y pasarle los datos
        return view('Productos/listar', ['productos' => $productos]);
    }


    public function detalle()
    {
        // Obtener el id del producto desde la URL
        $id = $this->request->getVar('id');

        // Obtener el producto de la base de datos
        $productosModel = new \App\Models\ProductosModel();
        $producto = $productosModel->find($id);

        // Cargar la vista y pasarle los datos
        return view('Productos/detalle', ['producto' => $producto]);
    }
}

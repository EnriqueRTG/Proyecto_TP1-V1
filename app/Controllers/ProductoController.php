<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class ProductoController extends BaseController
{

    public function index($page = 'producto')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // No se encontro la pagina.
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); //Capitaliza la primera letra


        return view('/components/header', $data) . view('/components/navbar') . view('pages/' . $page) . view('/components/footer');
    }

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

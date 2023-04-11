<h1>Listado de productos</h1>
<ul>
    <?php foreach ($productos as $producto) : ?>
        <li><?= $producto->nombre ?></li>
    <?php endforeach; ?>
</ul>
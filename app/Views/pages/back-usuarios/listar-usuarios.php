<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre/s</th>
            <th>Apellido/s</th>
            <th>Email</th>
            <th>Usuario</th>
            <th>Contrasenia</th>
            <th>Perfil</th>
            <th>Baja</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuario as $usuario):?>
            <tr>
                <td><?= $usuario['id'] ?></td>
                <td><?= $usuario['nombre'] ?></td>
                <td><?= $usuario['apellido'] ?></td>
                <td><?= $usuario['email'] ?></td>
                <td><?= $usuario['usuario'] ?></td>
                <td><?= $usuario['pass'] ?></td>
                <td><?= $usuario['perfil_id'] ?></td>
                <td><?= $usuario['baja'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
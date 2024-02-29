<?php

$pedidos = array(
    array("Usuario" => "Usuario1", "Producto" => "Huevos", "Fecha" => "2024-02-09", "Cantidad" => 2),
    array("Usuario" => "Usuario2", "Producto" => "Barra", "Fecha" => "2024-02-08", "Cantidad" => 1),
    array("Usuario" => "Usuario3", "Producto" => "Galleta", "Fecha" => "2024-02-08", "Cantidad" => 3),
    array("Usuario" => "Usuario1", "Producto" => "Naranja", "Fecha" => "2024-02-07", "Cantidad" => 4),
    array("Usuario" => "Usuario2", "Producto" => "Manzana", "Fecha" => "2024-02-07", "Cantidad" => 2),
    array("Usuario" => "Usuario3", "Producto" => "Cebolla", "Fecha" => "2024-02-06", "Cantidad" => 1),
    array("Usuario" => "Usuario1", "Producto" => "Patata", "Fecha" => "2024-02-06", "Cantidad" => 3),
    array("Usuario" => "Usuario2", "Producto" => "Lubina", "Fecha" => "2024-02-05", "Cantidad" => 2),
    array("Usuario" => "Usuario3", "Producto" => "Zanahoria", "Fecha" => "2024-02-05", "Cantidad" => 5),
);

?>

<div class="container">
    <h2 class="mt-4 mb-4">Pedidos de Productos</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Producto</th>
                <th>Fecha</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidos as $pedido) : ?>
                <tr>
                    <td><?php echo $pedido["Usuario"]; ?></td>
                    <td><?php echo $pedido["Producto"]; ?></td>
                    <td><?php echo $pedido["Fecha"]; ?></td>
                    <td><?php echo $pedido["Cantidad"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
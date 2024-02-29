<?php

$estado_pedidos = array(
    array("Fecha_Pedido" => "2024-02-07", "Proveedor" => "Proveedor A", "Entregado_Correctamente" => true, "Completo" => true),
    array("Fecha_Pedido" => "2024-02-14", "Proveedor" => "Proveedor B", "Entregado_Correctamente" => true, "Completo" => false),
    array("Fecha_Pedido" => "2024-02-21", "Proveedor" => "Proveedor C", "Entregado_Correctamente" => false, "Completo" => false),
    array("Fecha_Pedido" => "2024-02-28", "Proveedor" => "Proveedor D", "Entregado_Correctamente" => true, "Completo" => true),
    array("Fecha_Pedido" => "2024-03-06", "Proveedor" => "Proveedor E", "Entregado_Correctamente" => false, "Completo" => false),
);

?>

<div class="container">
    <h2 class="mt-4 mb-4">Estado de Pedidos</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Fecha del Pedido</th>
                <th>Proveedor</th>
                <th>Entregado Correctamente</th>
                <th>Completo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estado_pedidos as $pedido) : ?>
                <tr>
                    <td><?php echo $pedido["Fecha_Pedido"]; ?></td>
                    <td><?php echo $pedido["Proveedor"]; ?></td>
                    <td><?php echo $pedido["Entregado_Correctamente"] ? 'Sí' : 'No'; ?></td>
                    <td><?php echo $pedido["Completo"] ? 'Sí' : 'No'; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
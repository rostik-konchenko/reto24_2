<?php
echo "<div class='container'>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $articulo = $_POST["articulo"];
    $cantidad = $_POST["cantidad"];

    // Aquí podrías realizar las acciones necesarias con los datos del pedido
    // Por ejemplo, almacenarlos en una base de datos, enviar notificaciones por correo electrónico, etc.

    // Ejemplo de acción: Imprimir los datos del pedido
    echo "<h2>Pedido procesado:</h2>";
    echo "<p><strong>Artículo:</strong> $articulo</p>";
    echo "<p><strong>Cantidad:</strong> $cantidad</p>";
    echo "<p>El pedido se realizará el próximo viernes. Dependiendo del proveedor, llegará el lunes o miércoles siguiente.</p>";
} 
echo "</div>";

?>
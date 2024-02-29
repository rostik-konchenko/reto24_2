<div class="container mt-4">
    <h2>Formulario de Pedido</h2>
    <p><strong>Aviso:</strong> El pedido se realizará el próximo viernes. Dependiendo del proveedor, llegará el lunes o miércoles siguiente.</p>
    <form method="post" action="procesar_pedido.php">
        <div class="form-group">
            <label for="articulo">Artículo:</label>
            <input type="text" class="form-control" id="articulo" name="articulo" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" required>
        </div>
        <button type="submit" class="btn btn-primary">Añadir al Pedido</button>
    </form>
</div>
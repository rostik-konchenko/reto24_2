<div class="container mt-4">
        <h2>Control de Usuario</h2>
        <?php
        // Valores de ejemplo para el usuario
        $nombre_usuario = "Usuario Ejemplo";
        $email_usuario = "usuario@example.com";
        $telefono1_usuario = "123456789";
        $telefono2_usuario = "987654321";

        // Verificar si se ha enviado el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Actualizar la contraseña y los números de teléfono
            $nueva_contraseña = $_POST["nueva_contraseña"];
            $nuevo_telefono1 = $_POST["nuevo_telefono1"];
            $nuevo_telefono2 = $_POST["nuevo_telefono2"];

            // Aquí iría el código para actualizar los datos en la base de datos o en el sistema de almacenamiento correspondiente

            // Mostrar mensaje de éxito
            echo '<div class="alert alert-success">Datos actualizados correctamente.</div>';
        }
        ?>

        <p>Nombre: <?php echo $nombre_usuario; ?></p>
        <p>Email: <?php echo $email_usuario; ?></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="nueva_contraseña">Nueva Contraseña:</label>
                <input type="password" class="form-control" id="nueva_contraseña" name="nueva_contraseña" required>
            </div>
            <div class="form-group">
                <label for="nuevo_telefono1">Nuevo Número de Teléfono 1:</label>
                <input type="text" class="form-control" id="nuevo_telefono1" name="nuevo_telefono1" value="<?php echo $telefono1_usuario; ?>" required>
            </div>
            <div class="form-group">
                <label for="nuevo_telefono2">Nuevo Número de Teléfono 2:</label>
                <input type="text" class="form-control" id="nuevo_telefono2" name="nuevo_telefono2" value="<?php echo $telefono2_usuario; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Datos</button>
        </form>
    </div>
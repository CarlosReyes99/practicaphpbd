<?php
session_start(); // Iniciar la sesión

// Inicializar el array de productos en la sesión si no existe
if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = array(
        14 => array('idProd' => 14, 'Nombre' => 'Libreta', 'Precio' => 7.00, 'Existencia' => 8),
        189 => array('idProd' => 189, 'Nombre' => 'Escritorio', 'Precio' => 850.00, 'Existencia' => 12)
    );
}

// Obtener el array de productos de la sesión
$productos = &$_SESSION['productos']; // Referencia para modificar directamente

// Función para agregar un producto
function agregarProducto($idProd, $Nombre, $Precio, $Existencia) {
    global $productos;
    $productos[$idProd] = array('idProd' => $idProd, 'Nombre' => $Nombre, 'Precio' => $Precio, 'Existencia' => $Existencia);
}

// Función para eliminar un producto
function eliminarProducto($idProd) {
    global $productos;
    if (isset($productos[$idProd])) {
        unset($productos[$idProd]);
    }
}

// Manejo del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idProd = $_POST["idProd"];
    $Nombre = $_POST["nombre"];
    $Precio = $_POST["precio"];
    $Existencia = $_POST["existencia"];

    // Agregar el producto
    agregarProducto($idProd, $Nombre, $Precio, $Existencia);
}

// Manejo de la eliminación (GET)
if (isset($_GET["eliminar"])) {
    $idProdEliminar = $_GET["eliminar"];
    eliminarProducto($idProdEliminar);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Inventario</title>
    <link rel="stylesheet" href="style.css"> <!-- Vincula un archivo CSS -->
</head>
<body>
    <div class="container">
        <h1>Gestor de Inventario</h1>

        <form method="post">
            <label for="idProd">ID Producto:</label>
            <input type="number" id="idProd" name="idProd" required>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" required>

            <label for="existencia">Existencia:</label>
            <input type="number" id="existencia" name="existencia" required>

            <button type="submit">Registrar</button>
        </form>

        <h2>Productos</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Existencia</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($productos) > 0): ?>
                    <?php foreach ($productos as $id => $producto): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($producto['idProd']); ?></td>
                            <td><?php echo htmlspecialchars($producto['Nombre']); ?></td>
                            <td>$<?php echo number_format($producto['Precio'], 2); ?></td>
                            <td><?php echo htmlspecialchars($producto['Existencia']); ?></td>
                            <td><a href="?eliminar=<?php echo htmlspecialchars($id); ?>">Eliminar</a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No hay productos en el inventario.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

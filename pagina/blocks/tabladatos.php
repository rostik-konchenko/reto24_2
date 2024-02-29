<?php

// $bbdd = [
//     "foo" => "bar",
//     "bar" => "foo",
// ];

// $productos = [];

// array_push($productos,"1,'leche',1,''");

//     ("1,'leche',1,''"),
// array_push($productos,"2,'huevos',1,''";
// array_push($productos,"3,'barra de pan,3";
// array_push($productos,"4,'galleta',4,')";
// array_push($productos,"5,'zanahoria',4'')";
// array_push($productos,"6,'naranaja',4,')";
// array_push($productos,"7,'manzana',4,'),";
// array_push($productos,"8,'cebolla',3,'),";
// array_push($productos,"9,'patata',3,'',";
// array_push($productos,"0,'lubina',5,')";
// ];

$productos = array(
    array(
        "Id" => 1,
        "Nombre" => "Huevos",
        "Tipo" => "Caja",
        "Contenedor" => "Cartón",
        "Categoría" => "Huevos",
        "Proveedores" => array("Proveedor A", "Proveedor B")
    ),
    array(
        "Id" => 2,
        "Nombre" => "Barra",
        "Tipo" => "Unidad",
        "Contenedor" => "Bolsa",
        "Categoría" => "Panadería",
        "Proveedores" => array("Proveedor C", "Proveedor D")
    ),
    array(
        "Id" => 3,
        "Nombre" => "Galleta",
        "Tipo" => "Paquete",
        "Contenedor" => "Bolsa",
        "Categoría" => "Galletas",
        "Proveedores" => array("Proveedor E", "Proveedor F")
    ),
    array(
        "Id" => 4,
        "Nombre" => "Zanahoria",
        "Tipo" => "Unidad",
        "Contenedor" => "Malla",
        "Categoría" => "Verduras",
        "Proveedores" => array("Proveedor G", "Proveedor H")
    ),
    array(
        "Id" => 5,
        "Nombre" => "Naranja",
        "Tipo" => "Unidad",
        "Contenedor" => "Malla",
        "Categoría" => "Frutas",
        "Proveedores" => array("Proveedor I", "Proveedor J")
    ),
    array(
        "Id" => 6,
        "Nombre" => "Manzana",
        "Tipo" => "Unidad",
        "Contenedor" => "Bolsa",
        "Categoría" => "Frutas",
        "Proveedores" => array("Proveedor K", "Proveedor L")
    ),
    array(
        "Id" => 7,
        "Nombre" => "Cebolla",
        "Tipo" => "Unidad",
        "Contenedor" => "Malla",
        "Categoría" => "Verduras",
        "Proveedores" => array("Proveedor M", "Proveedor N")
    ),
    array(
        "Id" => 8,
        "Nombre" => "Patata",
        "Tipo" => "Unidad",
        "Contenedor" => "Saco",
        "Categoría" => "Verduras",
        "Proveedores" => array("Proveedor O", "Proveedor P")
    ),
    array(
        "Id" => 9,
        "Nombre" => "Lubina",
        "Tipo" => "Unidad",
        "Contenedor" => "Bandejita",
        "Categoría" => "Pescado",
        "Proveedores" => array("Proveedor Q", "Proveedor R")
    ),
);

?>


<div class="container">
        <h2 class="mt-4 mb-4">Productos de Cocina</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Contenedor</th>
                    <th>Categoría</th>
                    <th>Proveedores</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?php echo $producto["Id"]; ?></td>
                    <td><?php echo $producto["Nombre"]; ?></td>
                    <td><?php echo $producto["Tipo"]; ?></td>
                    <td><?php echo $producto["Contenedor"]; ?></td>
                    <td><?php echo $producto["Categoría"]; ?></td>
                    <td><?php echo implode(", ", $producto["Proveedores"]); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
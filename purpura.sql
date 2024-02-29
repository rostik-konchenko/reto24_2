DROP DATABASE IF EXISTS purpura;
CREATE DATABASE purpura;
USE purpura;


CREATE TABLE `producto` (
  `id` integer PRIMARY KEY,
  `descripcion` text,
  `idunidades` integer,
  `observaciones` text
);

CREATE TABLE `unidad` (
  `id` integer PRIMARY KEY,
  `descripcion` text,
  `observaciones` text
);

CREATE TABLE `categoria` (
  `id` integer PRIMARY KEY,
  `descripcion` text,
  `observaciones` text
);

CREATE TABLE `productos_categoria` (
  `id` integer PRIMARY KEY,
  `idproducto` integer,
  `idcategoria` integer
);

CREATE TABLE `residuo` (
  `id` integer PRIMARY KEY,
  `descripcion` text,
  `observaciones` text
);

CREATE TABLE `producto_residuo` (
  `id` integer PRIMARY KEY,
  `idproducto` integer,
  `idresiduo` integer
);

CREATE TABLE `residuos_generado` (
  `id` integer PRIMARY KEY,
  `descripcion` text,
  `cantidad` integer,
  `idestado_residuo` integer,
  `observaciones` text
);

CREATE TABLE `estado_residuo` (
  `id` integer PRIMARY KEY,
  `descripcion` text,
  `observaciones` text
);

CREATE TABLE `usuarios` (
  `id` integer PRIMARY KEY,
  `admin` bool,
  `nombre` text,
  `mail` text,
  `pswd` text,
  `activo` bool,
  `telefono1` integer,
  `telefono2` integer,
  `observaciones` text
);

CREATE TABLE `pedidos` (
  `id` integer PRIMARY KEY,
  `fecha` datetime,
  `idproveedor` integer,
  `idestado` integer,
  `idusuario` integer,
  `observaciones` text
);

CREATE TABLE `solicitudes` (
  `id` integer PRIMARY KEY,
  `descripcion` text,
  `observaciones` text
);

CREATE TABLE `estados` (
  `id` integer PRIMARY KEY,
  `estado` text,
  `observaciones` text
);

CREATE TABLE `proveedores` (
  `id` integer PRIMARY KEY,
  `descripcion` text,
  `telefono1` integer,
  `telefono2` integer,
  `email` text,
  `direccion` text,
  `observaciones` text
);

CREATE TABLE `linea_pedido` (
  `id` integer PRIMARY KEY,
  `idpedido` integer,
  `descripcion` text,
  `cantidad` integer,
  `idproducto` integer,
  `observaciones` text
);



ALTER TABLE `producto` ADD FOREIGN KEY (`idunidades`) REFERENCES `unidad` (`id`);

ALTER TABLE `producto_residuo` ADD FOREIGN KEY (`idresiduo`) REFERENCES `residuo` (`id`);

ALTER TABLE `productos_categoria` ADD FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`id`);

ALTER TABLE `productos_categoria` ADD FOREIGN KEY (`idproducto`) REFERENCES `producto` (`id`);

ALTER TABLE `residuos_generado` ADD FOREIGN KEY (`idestado_residuo`) REFERENCES `estado_residuo` (`id`);

ALTER TABLE `pedidos` ADD FOREIGN KEY (`idproveedor`) REFERENCES `proveedores` (`id`);

ALTER TABLE `pedidos` ADD FOREIGN KEY (`idestado`) REFERENCES `estados` (`id`);

ALTER TABLE `pedidos` ADD FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`id`);

ALTER TABLE `linea_pedido` ADD FOREIGN KEY (`idpedido`) REFERENCES `pedidos` (`id`);

ALTER TABLE `linea_pedido` ADD FOREIGN KEY (`idproducto`) REFERENCES `producto` (`id`);

INSERT INTO `unidad` (`id`, `descripcion`, `observaciones`) VALUES
(1, 'carton',''),
(2, 'docena',''),
(3, 'bolsa',''),
(4, 'caja',''),
(5, 'unidad','');

INSERT INTO `producto` (`id`, `descripcion`, `idunidades`,`observaciones`) VALUES
(1,'leche',1,''),
(2,'huevos',1,''),
(3,'barra de pan',3,''),
(4,'galleta',4,''),
(5,'zanahoria',4,''),
(6,'naranaja',4,''),
(7,'manzana',4,''),
(8,'cebolla',3,''),
(9,'patata',3,''),
(10,'lubina',5,'');

INSERT INTO `usuarios` (`id`, `admin`, `nombre`,`mail`,`pswd`,`activo`,`telefono1`,`telefono2`,`observaciones`) VALUES
(1, TRUE,'admin', 'luis@gmail.com',`admin`, true, 942681234, 942671234, ''),
(2, FALSE,'usuario','paco@gmail.com','usuario', true, 942681234, 942671234, '');

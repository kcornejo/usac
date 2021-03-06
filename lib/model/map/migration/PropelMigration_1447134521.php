<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1447134521.
 * Generated on 2015-11-10 06:48:41 
 */
class PropelMigration_1447134521
{

    public function preUp($manager)
    {
        // add the pre-migration code here
    }

    public function postUp($manager)
    {
        // add the post-migration code here
    }

    public function preDown($manager)
    {
        // add the pre-migration code here
    }

    public function postDown($manager)
    {
        // add the post-migration code here
    }

    /**
     * Get the SQL statements for the Up migration
     *
     * @return array list of the SQL strings to execute for the Up migration
     *               the keys being the datasources
     */
    public function getUpSQL()
    {
        return array (
  'propel' => '
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `usuario`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `usuario` VARCHAR(32) NOT NULL,
    `clave` VARCHAR(40),
    `nombre` VARCHAR(60) NOT NULL,
    `apellido` VARCHAR(60) NOT NULL,
    `administrador` TINYINT(1) DEFAULT 0,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    PRIMARY KEY (`id`),
    UNIQUE INDEX `llave` (`usuario`)
) ENGINE=InnoDB;

CREATE TABLE `cliente`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(255) NOT NULL,
    `correo` VARCHAR(70),
    `direccion` VARCHAR(100),
    `telefono` VARCHAR(100),
    `ciudad` VARCHAR(50),
    `observacion` VARCHAR(120),
    `puntos` INTEGER DEFAULT 0,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `detalle_pedido_proveedor`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `producto_id` INTEGER,
    `cantidad` INTEGER,
    `estado` VARCHAR(20) NOT NULL,
    `pedido_proveedor_id` INTEGER,
    PRIMARY KEY (`id`),
    INDEX `detalle_pedido_proveedor_FI_1` (`producto_id`),
    INDEX `detalle_pedido_proveedor_FI_2` (`pedido_proveedor_id`),
    CONSTRAINT `detalle_pedido_proveedor_FK_1`
        FOREIGN KEY (`producto_id`)
        REFERENCES `producto` (`id`),
    CONSTRAINT `detalle_pedido_proveedor_FK_2`
        FOREIGN KEY (`pedido_proveedor_id`)
        REFERENCES `pedido_proveedor` (`id`)
) ENGINE=InnoDB;

CREATE TABLE `marca`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(255) NOT NULL,
    `descripcion` VARCHAR(60),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `pedido_proveedor`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `fecha` DATE NOT NULL,
    `descripcion` VARCHAR(25),
    `estado` VARCHAR(30) NOT NULL,
    `usuario_id` INTEGER,
    `proveedor_id` INTEGER,
    PRIMARY KEY (`id`),
    INDEX `pedido_proveedor_FI_1` (`usuario_id`),
    INDEX `pedido_proveedor_FI_2` (`proveedor_id`),
    CONSTRAINT `pedido_proveedor_FK_1`
        FOREIGN KEY (`usuario_id`)
        REFERENCES `usuario` (`id`),
    CONSTRAINT `pedido_proveedor_FK_2`
        FOREIGN KEY (`proveedor_id`)
        REFERENCES `proveedor` (`id`)
) ENGINE=InnoDB;

CREATE TABLE `promocion`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `descripcion` VARCHAR(70),
    `fecha_inicio` DATE NOT NULL,
    `fecha_fin` DATE NOT NULL,
    `estado` VARCHAR(11),
    `producto_id` INTEGER,
    `descuento` DECIMAL,
    `promocion_global` TINYINT(1) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `promocion_FI_1` (`producto_id`),
    CONSTRAINT `promocion_FK_1`
        FOREIGN KEY (`producto_id`)
        REFERENCES `producto` (`id`)
) ENGINE=InnoDB;

CREATE TABLE `proveedor`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(255) NOT NULL,
    `direccion` VARCHAR(70) NOT NULL,
    `correo_eletronico` VARCHAR(70) NOT NULL,
    `nombre_contacto` VARCHAR(70),
    `telefono` VARCHAR(30) NOT NULL,
    `ciudad` VARCHAR(30),
    `observacion` VARCHAR(70),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `tipo_pago`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(255) NOT NULL,
    `descripcion` VARCHAR(70),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `tipo_producto`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(255) NOT NULL,
    `descripcion` VARCHAR(120),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `tipo_transaccion`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `descripcion` VARCHAR(60) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `tipo_usuario`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(255) NOT NULL,
    `descripcion` VARCHAR(120),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `transaccion`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `serie` VARCHAR(120),
    `documento` VARCHAR(120),
    `cliente_id` INTEGER,
    `usuario_id` INTEGER,
    `tipo_transaccion_id` INTEGER,
    `no_tarjeta` VARCHAR(60),
    `total` DECIMAL,
    `direccion` VARCHAR(60),
    `tipo_pago_id` INTEGER,
    PRIMARY KEY (`id`),
    INDEX `transaccion_FI_1` (`cliente_id`),
    INDEX `transaccion_FI_2` (`usuario_id`),
    INDEX `transaccion_FI_3` (`tipo_transaccion_id`),
    INDEX `transaccion_FI_4` (`tipo_pago_id`),
    CONSTRAINT `transaccion_FK_1`
        FOREIGN KEY (`cliente_id`)
        REFERENCES `cliente` (`id`),
    CONSTRAINT `transaccion_FK_2`
        FOREIGN KEY (`usuario_id`)
        REFERENCES `usuario` (`id`),
    CONSTRAINT `transaccion_FK_3`
        FOREIGN KEY (`tipo_transaccion_id`)
        REFERENCES `tipo_transaccion` (`id`),
    CONSTRAINT `transaccion_FK_4`
        FOREIGN KEY (`tipo_pago_id`)
        REFERENCES `tipo_pago` (`id`)
) ENGINE=InnoDB;

CREATE TABLE `producto`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `descripcion` VARCHAR(255) NOT NULL,
    `marca_id` INTEGER,
    `tipo_producto_id` INTEGER,
    `tipo_presentacion_id` INTEGER,
    `cantidad_minima` INTEGER DEFAULT 20,
    PRIMARY KEY (`id`),
    INDEX `producto_FI_1` (`marca_id`),
    INDEX `producto_FI_2` (`tipo_producto_id`),
    INDEX `producto_FI_3` (`tipo_presentacion_id`),
    CONSTRAINT `producto_FK_1`
        FOREIGN KEY (`marca_id`)
        REFERENCES `marca` (`id`),
    CONSTRAINT `producto_FK_2`
        FOREIGN KEY (`tipo_producto_id`)
        REFERENCES `tipo_producto` (`id`),
    CONSTRAINT `producto_FK_3`
        FOREIGN KEY (`tipo_presentacion_id`)
        REFERENCES `tipo_presentacion` (`id`)
) ENGINE=InnoDB;

CREATE TABLE `inventario`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `producto_id` INTEGER,
    `cantidad` INTEGER,
    `precio_compra` DOUBLE,
    `proveedor_id` INTEGER,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    PRIMARY KEY (`id`),
    INDEX `inventario_FI_1` (`producto_id`),
    INDEX `inventario_FI_2` (`proveedor_id`),
    CONSTRAINT `inventario_FK_1`
        FOREIGN KEY (`producto_id`)
        REFERENCES `producto` (`id`),
    CONSTRAINT `inventario_FK_2`
        FOREIGN KEY (`proveedor_id`)
        REFERENCES `proveedor` (`id`)
) ENGINE=InnoDB;

CREATE TABLE `factura`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `cliente_id` INTEGER,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `total` DOUBLE,
    `tipo_pago_id` INTEGER,
    `activo` TINYINT(1) DEFAULT 1,
    PRIMARY KEY (`id`),
    INDEX `factura_FI_1` (`cliente_id`),
    INDEX `factura_FI_2` (`tipo_pago_id`),
    CONSTRAINT `factura_FK_1`
        FOREIGN KEY (`cliente_id`)
        REFERENCES `cliente` (`id`),
    CONSTRAINT `factura_FK_2`
        FOREIGN KEY (`tipo_pago_id`)
        REFERENCES `tipo_pago` (`id`)
) ENGINE=InnoDB;

CREATE TABLE `factura_detalle`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `factura_id` INTEGER,
    `producto_id` INTEGER,
    `proveedor_id` INTEGER,
    `cantidad` INTEGER,
    `precio_unitario` DOUBLE,
    PRIMARY KEY (`id`),
    INDEX `factura_detalle_FI_1` (`factura_id`),
    INDEX `factura_detalle_FI_2` (`producto_id`),
    INDEX `factura_detalle_FI_3` (`proveedor_id`),
    CONSTRAINT `factura_detalle_FK_1`
        FOREIGN KEY (`factura_id`)
        REFERENCES `factura` (`id`),
    CONSTRAINT `factura_detalle_FK_2`
        FOREIGN KEY (`producto_id`)
        REFERENCES `producto` (`id`),
    CONSTRAINT `factura_detalle_FK_3`
        FOREIGN KEY (`proveedor_id`)
        REFERENCES `proveedor` (`id`)
) ENGINE=InnoDB;

CREATE TABLE `bitacora_cambios`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `modelo` VARCHAR(255),
    `descripcion` VARCHAR(255),
    `ip` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `tipo_presentacion`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `descripcion` VARCHAR(250),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

    /**
     * Get the SQL statements for the Down migration
     *
     * @return array list of the SQL strings to execute for the Down migration
     *               the keys being the datasources
     */
    public function getDownSQL()
    {
        return array (
  'propel' => '
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `usuario`;

DROP TABLE IF EXISTS `cliente`;

DROP TABLE IF EXISTS `detalle_pedido_proveedor`;

DROP TABLE IF EXISTS `marca`;

DROP TABLE IF EXISTS `pedido_proveedor`;

DROP TABLE IF EXISTS `promocion`;

DROP TABLE IF EXISTS `proveedor`;

DROP TABLE IF EXISTS `tipo_pago`;

DROP TABLE IF EXISTS `tipo_producto`;

DROP TABLE IF EXISTS `tipo_transaccion`;

DROP TABLE IF EXISTS `tipo_usuario`;

DROP TABLE IF EXISTS `transaccion`;

DROP TABLE IF EXISTS `producto`;

DROP TABLE IF EXISTS `inventario`;

DROP TABLE IF EXISTS `factura`;

DROP TABLE IF EXISTS `factura_detalle`;

DROP TABLE IF EXISTS `bitacora_cambios`;

DROP TABLE IF EXISTS `tipo_presentacion`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}
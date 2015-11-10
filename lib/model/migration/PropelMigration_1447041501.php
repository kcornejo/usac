<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1447041501.
 * Generated on 2015-11-09 03:58:21 by jorgewc
 */
class PropelMigration_1447041501
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

ALTER TABLE `cliente` CHANGE `nombre` `nombre` VARCHAR(255) NOT NULL;

ALTER TABLE `cliente`
    ADD `puntos` INTEGER DEFAULT 0 AFTER `observacion`;

ALTER TABLE `marca` CHANGE `nombre` `nombre` VARCHAR(255) NOT NULL;

ALTER TABLE `producto` CHANGE `descripcion` `descripcion` VARCHAR(255) NOT NULL;

ALTER TABLE `producto`
    ADD `tipo_producto_id` INTEGER AFTER `marca_id`;

ALTER TABLE `producto` DROP `precio`;

CREATE INDEX `producto_FI_2` ON `producto` (`tipo_producto_id`);

ALTER TABLE `producto` ADD CONSTRAINT `producto_FK_2`
    FOREIGN KEY (`tipo_producto_id`)
    REFERENCES `tipo_producto` (`id`);

ALTER TABLE `proveedor` CHANGE `nombre` `nombre` VARCHAR(255) NOT NULL;

ALTER TABLE `tipo_pago` CHANGE `nombre` `nombre` VARCHAR(255) NOT NULL;

ALTER TABLE `tipo_producto` CHANGE `nombre` `nombre` VARCHAR(255) NOT NULL;

ALTER TABLE `tipo_usuario` CHANGE `nombre` `nombre` VARCHAR(255) NOT NULL;

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

DROP TABLE IF EXISTS `inventario`;

DROP TABLE IF EXISTS `factura`;

DROP TABLE IF EXISTS `factura_detalle`;

DROP TABLE IF EXISTS `bitacora_cambios`;

ALTER TABLE `cliente` CHANGE `nombre` `nombre` VARCHAR(70) NOT NULL;

ALTER TABLE `cliente` DROP `puntos`;

ALTER TABLE `marca` CHANGE `nombre` `nombre` VARCHAR(30) NOT NULL;

ALTER TABLE `producto` DROP FOREIGN KEY `producto_FK_2`;

DROP INDEX `producto_FI_2` ON `producto`;

ALTER TABLE `producto` CHANGE `descripcion` `descripcion` VARCHAR(255);

ALTER TABLE `producto`
    ADD `precio` DOUBLE AFTER `descripcion`;

ALTER TABLE `producto` DROP `tipo_producto_id`;

ALTER TABLE `proveedor` CHANGE `nombre` `nombre` VARCHAR(70) NOT NULL;

ALTER TABLE `tipo_pago` CHANGE `nombre` `nombre` VARCHAR(30) NOT NULL;

ALTER TABLE `tipo_producto` CHANGE `nombre` `nombre` VARCHAR(70) NOT NULL;

ALTER TABLE `tipo_usuario` CHANGE `nombre` `nombre` VARCHAR(30) NOT NULL;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}
<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1446928912.
 * Generated on 2015-11-07 21:41:52 
 */
class PropelMigration_1446928912
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

ALTER TABLE `cliente`
    ADD `puntos` INTEGER DEFAULT 0 AFTER `observacion`;

ALTER TABLE `producto` DROP `precio`;

CREATE TABLE `inventario`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `producto_id` INTEGER,
    `cantidad` INTEGER,
    `precio_compra` DECIMAL,
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

ALTER TABLE `cliente` DROP `puntos`;

ALTER TABLE `producto`
    ADD `precio` DOUBLE AFTER `descripcion`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}
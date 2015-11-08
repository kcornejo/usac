<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1446935188.
 * Generated on 2015-11-07 23:26:28 
 */
class PropelMigration_1446935188
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
    `cantidad` INTEGER,
    `precio_unitario` DOUBLE,
    PRIMARY KEY (`id`),
    INDEX `factura_detalle_FI_1` (`factura_id`),
    INDEX `factura_detalle_FI_2` (`producto_id`),
    CONSTRAINT `factura_detalle_FK_1`
        FOREIGN KEY (`factura_id`)
        REFERENCES `factura` (`id`),
    CONSTRAINT `factura_detalle_FK_2`
        FOREIGN KEY (`producto_id`)
        REFERENCES `producto` (`id`)
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

DROP TABLE IF EXISTS `factura`;

DROP TABLE IF EXISTS `factura_detalle`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}
<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1447298655.
 * Generated on 2015-11-12 04:24:15 
 */
class PropelMigration_1447298655
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

CREATE TABLE `movimiento`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `proveedor_id` INTEGER,
    `cliente_id` INTEGER,
    `tipo_movimiento` VARCHAR(10),
    `producto_id` INTEGER,
    `cantidad` INTEGER,
    `fecha` VARCHAR(250),
    PRIMARY KEY (`id`),
    INDEX `movimiento_FI_1` (`proveedor_id`),
    INDEX `movimiento_FI_2` (`cliente_id`),
    INDEX `movimiento_FI_3` (`producto_id`),
    CONSTRAINT `movimiento_FK_1`
        FOREIGN KEY (`proveedor_id`)
        REFERENCES `proveedor` (`id`),
    CONSTRAINT `movimiento_FK_2`
        FOREIGN KEY (`cliente_id`)
        REFERENCES `cliente` (`id`),
    CONSTRAINT `movimiento_FK_3`
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

DROP TABLE IF EXISTS `movimiento`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}
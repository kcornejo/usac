<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1446962648.
 * Generated on 2015-11-08 07:04:08 
 */
class PropelMigration_1446962648
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

ALTER TABLE `factura_detalle`
    ADD `proveedor_id` INTEGER AFTER `producto_id`;

CREATE INDEX `factura_detalle_FI_3` ON `factura_detalle` (`proveedor_id`);

ALTER TABLE `factura_detalle` ADD CONSTRAINT `factura_detalle_FK_3`
    FOREIGN KEY (`proveedor_id`)
    REFERENCES `proveedor` (`id`);

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

ALTER TABLE `factura_detalle` DROP FOREIGN KEY `factura_detalle_FK_3`;

DROP INDEX `factura_detalle_FI_3` ON `factura_detalle`;

ALTER TABLE `factura_detalle` DROP `proveedor_id`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}
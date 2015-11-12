<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1447311959.
 * Generated on 2015-11-12 08:05:59 
 */
class PropelMigration_1447311959
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

ALTER TABLE `promocion` CHANGE `fecha_inicio` `fecha_inicio` VARCHAR(32);

ALTER TABLE `promocion` CHANGE `fecha_fin` `fecha_fin` VARCHAR(32);

ALTER TABLE `promocion` CHANGE `descuento` `descuento` DOUBLE;

ALTER TABLE `promocion`
    ADD `activo` TINYINT(1) DEFAULT 1 AFTER `id`;

ALTER TABLE `promocion` DROP `descripcion`;

ALTER TABLE `promocion` DROP `estado`;

ALTER TABLE `promocion` DROP `promocion_global`;

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

ALTER TABLE `promocion` CHANGE `fecha_inicio` `fecha_inicio` DATE NOT NULL;

ALTER TABLE `promocion` CHANGE `fecha_fin` `fecha_fin` DATE NOT NULL;

ALTER TABLE `promocion` CHANGE `descuento` `descuento` DECIMAL;

ALTER TABLE `promocion`
    ADD `descripcion` VARCHAR(70) AFTER `id`,
    ADD `estado` VARCHAR(11) AFTER `fecha_fin`,
    ADD `promocion_global` TINYINT(1) NOT NULL AFTER `descuento`;

ALTER TABLE `promocion` DROP `activo`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}
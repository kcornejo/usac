<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1446931767.
 * Generated on 2015-11-07 22:29:27 
 */
class PropelMigration_1446931767
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

ALTER TABLE `marca` CHANGE `nombre` `nombre` VARCHAR(255) NOT NULL;

ALTER TABLE `producto` CHANGE `descripcion` `descripcion` VARCHAR(255) NOT NULL;

ALTER TABLE `proveedor` CHANGE `nombre` `nombre` VARCHAR(255) NOT NULL;

ALTER TABLE `tipo_pago` CHANGE `nombre` `nombre` VARCHAR(255) NOT NULL;

ALTER TABLE `tipo_producto` CHANGE `nombre` `nombre` VARCHAR(255) NOT NULL;

ALTER TABLE `tipo_usuario` CHANGE `nombre` `nombre` VARCHAR(255) NOT NULL;

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

ALTER TABLE `cliente` CHANGE `nombre` `nombre` VARCHAR(70) NOT NULL;

ALTER TABLE `marca` CHANGE `nombre` `nombre` VARCHAR(30) NOT NULL;

ALTER TABLE `producto` CHANGE `descripcion` `descripcion` VARCHAR(255);

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
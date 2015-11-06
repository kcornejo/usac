<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1446791471.
 * Generated on 2015-11-06 07:31:11 
 */
class PropelMigration_1446791471
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

ALTER TABLE `promocion` CHANGE `fechaFinal` `fecha_fin` DATE NOT NULL;

ALTER TABLE `promocion` CHANGE `estadoPromo` `estado` VARCHAR(11);

ALTER TABLE `proveedor` CHANGE `correoElectronico` `correo_eletronico` VARCHAR(70) NOT NULL;

ALTER TABLE `proveedor` CHANGE `nombreContacto` `nombre_contacto` VARCHAR(70);

ALTER TABLE `tipo_transaccion`
    ADD `created_at` DATETIME AFTER `descripcion`,
    ADD `updated_at` DATETIME AFTER `created_at`,
    ADD `created_by` VARCHAR(32) AFTER `updated_at`,
    ADD `updated_by` VARCHAR(32) AFTER `created_by`;

ALTER TABLE `tipo_transaccion` DROP `fechaCreacion`;

ALTER TABLE `transaccion` CHANGE `noTarjeta` `no_tarjeta` VARCHAR(60);

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

ALTER TABLE `promocion` CHANGE `fecha_fin` `fechaFinal` DATE NOT NULL;

ALTER TABLE `promocion` CHANGE `estado` `estadoPromo` VARCHAR(11);

ALTER TABLE `proveedor` CHANGE `correo_eletronico` `correoElectronico` VARCHAR(70) NOT NULL;

ALTER TABLE `proveedor` CHANGE `nombre_contacto` `nombreContacto` VARCHAR(70);

ALTER TABLE `tipo_transaccion`
    ADD `fechaCreacion` DATE NOT NULL AFTER `descripcion`;

ALTER TABLE `tipo_transaccion` DROP `created_at`;

ALTER TABLE `tipo_transaccion` DROP `updated_at`;

ALTER TABLE `tipo_transaccion` DROP `created_by`;

ALTER TABLE `tipo_transaccion` DROP `updated_by`;

ALTER TABLE `transaccion` CHANGE `no_tarjeta` `noTarjeta` VARCHAR(60);

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}
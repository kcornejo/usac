<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1447039410.
 * Generated on 2015-11-09 04:23:30 
 */
class PropelMigration_1447039410
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

ALTER TABLE `producto`
    ADD `tipo_presentacion_id` INTEGER AFTER `tipo_producto_id`;

CREATE INDEX `producto_FI_3` ON `producto` (`tipo_presentacion_id`);

ALTER TABLE `producto` ADD CONSTRAINT `producto_FK_3`
    FOREIGN KEY (`tipo_presentacion_id`)
    REFERENCES `tipo_presentacion` (`id`);

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

DROP TABLE IF EXISTS `tipo_presentacion`;

ALTER TABLE `producto` DROP FOREIGN KEY `producto_FK_3`;

DROP INDEX `producto_FI_3` ON `producto`;

ALTER TABLE `producto` DROP `tipo_presentacion_id`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}
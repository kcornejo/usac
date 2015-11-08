<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1446931025.
 * Generated on 2015-11-07 22:17:05 
 */
class PropelMigration_1446931025
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
    ADD `tipo_producto_id` INTEGER AFTER `marca_id`;

CREATE INDEX `producto_FI_2` ON `producto` (`tipo_producto_id`);

ALTER TABLE `producto` ADD CONSTRAINT `producto_FK_2`
    FOREIGN KEY (`tipo_producto_id`)
    REFERENCES `tipo_producto` (`id`);

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

ALTER TABLE `producto` DROP FOREIGN KEY `producto_FK_2`;

DROP INDEX `producto_FI_2` ON `producto`;

ALTER TABLE `producto` DROP `tipo_producto_id`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}
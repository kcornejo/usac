<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1446326079.
 * Generated on 2015-10-31 22:14:39 
 */
class PropelMigration_1446326079
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

ALTER TABLE `mesa`
    ADD `turno` INTEGER AFTER `activo`;

CREATE TABLE `turno`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `no_turno` INTEGER,
    `jugador_mesa_id` INTEGER,
    `mano` TEXT,
    PRIMARY KEY (`id`),
    INDEX `turno_FI_1` (`jugador_mesa_id`),
    CONSTRAINT `turno_FK_1`
        FOREIGN KEY (`jugador_mesa_id`)
        REFERENCES `jugador_mesa` (`id`)
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

DROP TABLE IF EXISTS `turno`;

ALTER TABLE `mesa` DROP `turno`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}
<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1446310111.
 * Generated on 2015-10-31 17:48:31 
 */
class PropelMigration_1446310111
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

CREATE TABLE `usuario`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `usuario` VARCHAR(32) NOT NULL,
    `clave` VARCHAR(40),
    `nombre` VARCHAR(60) NOT NULL,
    `apellido` VARCHAR(60) NOT NULL,
    `administrador` TINYINT(1) DEFAULT 0,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    PRIMARY KEY (`id`),
    UNIQUE INDEX `llave` (`usuario`)
) ENGINE=InnoDB;

CREATE TABLE `jugador`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `created_by` VARCHAR(255),
    `updated_by` VARCHAR(255),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `mesa`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `created_by` VARCHAR(255),
    `updated_by` VARCHAR(255),
    `activo` TINYINT(1) DEFAULT 1,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `jugador_mesa`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `mesa_id` INTEGER,
    `jugador_id` INTEGER,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `created_by` VARCHAR(255),
    `updated_by` VARCHAR(255),
    PRIMARY KEY (`id`),
    INDEX `jugador_mesa_FI_1` (`mesa_id`),
    INDEX `jugador_mesa_FI_2` (`jugador_id`),
    CONSTRAINT `jugador_mesa_FK_1`
        FOREIGN KEY (`mesa_id`)
        REFERENCES `mesa` (`id`),
    CONSTRAINT `jugador_mesa_FK_2`
        FOREIGN KEY (`jugador_id`)
        REFERENCES `jugador` (`id`)
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

DROP TABLE IF EXISTS `usuario`;

DROP TABLE IF EXISTS `jugador`;

DROP TABLE IF EXISTS `mesa`;

DROP TABLE IF EXISTS `jugador_mesa`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}
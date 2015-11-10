
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- usuario
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `usuario` VARCHAR(32) NOT NULL,
    `clave` VARCHAR(40),
    `nombre` VARCHAR(60) NOT NULL,
    `apellido` VARCHAR(60) NOT NULL,
    `participante_id` INTEGER,
    `revisor` TINYINT(1) DEFAULT 0,
    `supervisor` TINYINT(1) DEFAULT 0,
    `vo_bo` TINYINT(1) DEFAULT 0,
    `administrador` TINYINT(1) DEFAULT 0,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    PRIMARY KEY (`id`),
    UNIQUE INDEX `llave` (`usuario`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- participante
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `participante`;

CREATE TABLE `participante`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(60) NOT NULL,
    `apellido` VARCHAR(60) NOT NULL,
    `observaciones` TEXT,
    `proyecto_id` INTEGER,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    PRIMARY KEY (`id`),
    INDEX `participante_FI_1` (`proyecto_id`),
    CONSTRAINT `participante_FK_1`
        FOREIGN KEY (`proyecto_id`)
        REFERENCES `proyecto` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- empresa
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `empresa`;

CREATE TABLE `empresa`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `prefijo` VARCHAR(32),
    `nombre` VARCHAR(260) NOT NULL,
    `direccion` VARCHAR(260),
    `telefono` VARCHAR(260),
    `encargado` VARCHAR(260),
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- proyecto
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `proyecto`;

CREATE TABLE `proyecto`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `empresa_id` INTEGER,
    `prefijo` VARCHAR(32),
    `nombre` VARCHAR(260) NOT NULL,
    `direccion` VARCHAR(260),
    `telefono` VARCHAR(260),
    `encargado` VARCHAR(260),
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `proyecto_FI_1` (`empresa_id`),
    CONSTRAINT `proyecto_FK_1`
        FOREIGN KEY (`empresa_id`)
        REFERENCES `empresa` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- tipificacion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tipificacion`;

CREATE TABLE `tipificacion`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `prefijo` VARCHAR(32),
    `nombre` VARCHAR(260) NOT NULL,
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- fuente_hallazgo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `fuente_hallazgo`;

CREATE TABLE `fuente_hallazgo`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `tipificacion_id` INTEGER,
    `orden` INTEGER,
    `prefijo` VARCHAR(32),
    `nombre` VARCHAR(260) NOT NULL,
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `fuente_hallazgo_FI_1` (`tipificacion_id`),
    CONSTRAINT `fuente_hallazgo_FK_1`
        FOREIGN KEY (`tipificacion_id`)
        REFERENCES `tipificacion` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- identificacion_hallazgo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `identificacion_hallazgo`;

CREATE TABLE `identificacion_hallazgo`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `prefijo` VARCHAR(32),
    `nombre` VARCHAR(260) NOT NULL,
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- division_hallazgo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `division_hallazgo`;

CREATE TABLE `division_hallazgo`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `orden` INTEGER,
    `prefijo` VARCHAR(32),
    `nombre` VARCHAR(260) NOT NULL,
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- dispocision_tomar
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `dispocision_tomar`;

CREATE TABLE `dispocision_tomar`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `orden` INTEGER,
    `prefijo` VARCHAR(32),
    `nombre` VARCHAR(260) NOT NULL,
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- perfil_usuario
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `perfil_usuario`;

CREATE TABLE `perfil_usuario`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `prefijo` VARCHAR(32),
    `nombre` VARCHAR(260) NOT NULL,
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- usuario_proyecto
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `usuario_proyecto`;

CREATE TABLE `usuario_proyecto`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `usuario_id` INTEGER,
    `proyecto_id` INTEGER,
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `usuario_proyecto_FI_1` (`usuario_id`),
    INDEX `usuario_proyecto_FI_2` (`proyecto_id`),
    CONSTRAINT `usuario_proyecto_FK_1`
        FOREIGN KEY (`usuario_id`)
        REFERENCES `usuario` (`id`),
    CONSTRAINT `usuario_proyecto_FK_2`
        FOREIGN KEY (`proyecto_id`)
        REFERENCES `proyecto` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- correlativo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `correlativo`;

CREATE TABLE `correlativo`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `ano` INTEGER,
    `proyecto_id` INTEGER,
    `numero` INTEGER,
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `correlativo_FI_1` (`proyecto_id`),
    CONSTRAINT `correlativo_FK_1`
        FOREIGN KEY (`proyecto_id`)
        REFERENCES `proyecto` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- analisis_hallazgo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `analisis_hallazgo`;

CREATE TABLE `analisis_hallazgo`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `orden` INTEGER,
    `descripcion` VARCHAR(260) NOT NULL,
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- tipo_seguimiento
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tipo_seguimiento`;

CREATE TABLE `tipo_seguimiento`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `orden` INTEGER,
    `prefijo` VARCHAR(32),
    `descripcion` VARCHAR(260) NOT NULL,
    `dias_sugeridos` INTEGER,
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- estatus
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `estatus`;

CREATE TABLE `estatus`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `codigo` VARCHAR(32),
    `descripcion` VARCHAR(260) NOT NULL,
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- conformidad
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `conformidad`;

CREATE TABLE `conformidad`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(320),
    `proyecto_id` INTEGER,
    `descripcion` TEXT NOT NULL,
    `fecha` DATE,
    `fuente_hallazgo_id` INTEGER,
    `referencia_comprobada` VARCHAR(520),
    `reportado_por` INTEGER,
    `causa_raiz` TEXT NOT NULL,
    `estatus_id` INTEGER,
    `cerrado_por` INTEGER,
    `fecha_cerrado` DATE,
    `vo_bo_por` INTEGER,
    `fecha_vo_bo` DATE,
    `accion_inmediata` TEXT NOT NULL,
    `dispocision_final` TEXT NOT NULL,
    `responsable_dispocision` VARCHAR(520),
    `fecha_disposicion` DATE,
    `fecha_fin` DATE,
    `no_revision` INTEGER,
    `codigo_conformidad` VARCHAR(50),
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `comentarios_cierre` VARCHAR(520),
    `comentarios_vo_bo` VARCHAR(520),
    `comentario_analisis` VARCHAR(520),
    `tipo_analisis` VARCHAR(100),
    `objetivo_analisis` VARCHAR(520),
    `punto_mejora` VARCHAR(320),
    `responsable_mejora` INTEGER,
    PRIMARY KEY (`id`),
    INDEX `conformidad_I_1` (`reportado_por`),
    INDEX `conformidad_I_2` (`cerrado_por`),
    INDEX `conformidad_I_3` (`vo_bo_por`),
    INDEX `conformidad_I_4` (`responsable_mejora`),
    INDEX `conformidad_FI_1` (`proyecto_id`),
    INDEX `conformidad_FI_2` (`fuente_hallazgo_id`),
    INDEX `conformidad_FI_4` (`estatus_id`),
    CONSTRAINT `conformidad_FK_1`
        FOREIGN KEY (`proyecto_id`)
        REFERENCES `proyecto` (`id`),
    CONSTRAINT `conformidad_FK_2`
        FOREIGN KEY (`fuente_hallazgo_id`)
        REFERENCES `fuente_hallazgo` (`id`),
    CONSTRAINT `conformidad_FK_3`
        FOREIGN KEY (`reportado_por`)
        REFERENCES `participante` (`id`),
    CONSTRAINT `conformidad_FK_4`
        FOREIGN KEY (`estatus_id`)
        REFERENCES `estatus` (`id`),
    CONSTRAINT `conformidad_FK_5`
        FOREIGN KEY (`cerrado_por`)
        REFERENCES `participante` (`id`),
    CONSTRAINT `conformidad_FK_6`
        FOREIGN KEY (`vo_bo_por`)
        REFERENCES `participante` (`id`),
    CONSTRAINT `conformidad_FK_7`
        FOREIGN KEY (`responsable_mejora`)
        REFERENCES `participante` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- conformidad_detalle_hallazgo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `conformidad_detalle_hallazgo`;

CREATE TABLE `conformidad_detalle_hallazgo`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `conformidad_id` INTEGER,
    `identificacion_hallazgo_id` INTEGER,
    `division_hallazgo_id` INTEGER,
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `conformidad_detalle_hallazgo_FI_1` (`conformidad_id`),
    INDEX `conformidad_detalle_hallazgo_FI_2` (`identificacion_hallazgo_id`),
    INDEX `conformidad_detalle_hallazgo_FI_3` (`division_hallazgo_id`),
    CONSTRAINT `conformidad_detalle_hallazgo_FK_1`
        FOREIGN KEY (`conformidad_id`)
        REFERENCES `conformidad` (`id`),
    CONSTRAINT `conformidad_detalle_hallazgo_FK_2`
        FOREIGN KEY (`identificacion_hallazgo_id`)
        REFERENCES `identificacion_hallazgo` (`id`),
    CONSTRAINT `conformidad_detalle_hallazgo_FK_3`
        FOREIGN KEY (`division_hallazgo_id`)
        REFERENCES `division_hallazgo` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- conformidad_disposicion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `conformidad_disposicion`;

CREATE TABLE `conformidad_disposicion`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `conformidad_id` INTEGER,
    `dispocision_tomar_id` INTEGER,
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `conformidad_disposicion_FI_1` (`conformidad_id`),
    INDEX `conformidad_disposicion_FI_2` (`dispocision_tomar_id`),
    CONSTRAINT `conformidad_disposicion_FK_1`
        FOREIGN KEY (`conformidad_id`)
        REFERENCES `conformidad` (`id`),
    CONSTRAINT `conformidad_disposicion_FK_2`
        FOREIGN KEY (`dispocision_tomar_id`)
        REFERENCES `dispocision_tomar` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- conformidad_costo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `conformidad_costo`;

CREATE TABLE `conformidad_costo`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `conformidad_id` INTEGER,
    `tipo_costo_id` INTEGER,
    `cantidad` INTEGER,
    `unidad` DOUBLE,
    `costo` DOUBLE,
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `conformidad_costo_FI_1` (`conformidad_id`),
    INDEX `conformidad_costo_FI_2` (`tipo_costo_id`),
    CONSTRAINT `conformidad_costo_FK_1`
        FOREIGN KEY (`conformidad_id`)
        REFERENCES `conformidad` (`id`),
    CONSTRAINT `conformidad_costo_FK_2`
        FOREIGN KEY (`tipo_costo_id`)
        REFERENCES `tipo_costo` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- conformidad_analisis_hallazgo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `conformidad_analisis_hallazgo`;

CREATE TABLE `conformidad_analisis_hallazgo`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `conformidad_id` INTEGER,
    `analisis_hallazgo_id` INTEGER,
    `comentarios` TEXT,
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `conformidad_analisis_hallazgo_FI_1` (`conformidad_id`),
    INDEX `conformidad_analisis_hallazgo_FI_2` (`analisis_hallazgo_id`),
    CONSTRAINT `conformidad_analisis_hallazgo_FK_1`
        FOREIGN KEY (`conformidad_id`)
        REFERENCES `conformidad` (`id`),
    CONSTRAINT `conformidad_analisis_hallazgo_FK_2`
        FOREIGN KEY (`analisis_hallazgo_id`)
        REFERENCES `analisis_hallazgo` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- conformidad_seguimieto
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `conformidad_seguimieto`;

CREATE TABLE `conformidad_seguimieto`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `conformidad_id` INTEGER,
    `tipo_seguimiento_id` INTEGER,
    `participante_id` INTEGER,
    `comentarios` TEXT,
    `fecha_inicio` DATE,
    `fecha_fin` DATE,
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `revisado` TINYINT(1) DEFAULT 0,
    `revisado_por` INTEGER,
    `fecha_revision` DATE,
    `observaciones_revision` TEXT,
    PRIMARY KEY (`id`),
    INDEX `conformidad_seguimieto_I_1` (`revisado_por`),
    INDEX `conformidad_seguimieto_FI_1` (`conformidad_id`),
    INDEX `conformidad_seguimieto_FI_2` (`tipo_seguimiento_id`),
    INDEX `conformidad_seguimieto_FI_3` (`participante_id`),
    CONSTRAINT `conformidad_seguimieto_FK_1`
        FOREIGN KEY (`conformidad_id`)
        REFERENCES `conformidad` (`id`),
    CONSTRAINT `conformidad_seguimieto_FK_2`
        FOREIGN KEY (`tipo_seguimiento_id`)
        REFERENCES `tipo_seguimiento` (`id`),
    CONSTRAINT `conformidad_seguimieto_FK_3`
        FOREIGN KEY (`participante_id`)
        REFERENCES `participante` (`id`),
    CONSTRAINT `conformidad_seguimieto_FK_4`
        FOREIGN KEY (`revisado_por`)
        REFERENCES `participante` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- tipo_costo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tipo_costo`;

CREATE TABLE `tipo_costo`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(32),
    `descripcion` VARCHAR(100),
    `orden` INTEGER,
    `observaciones` TEXT,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- usuario_empresa
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `usuario_empresa`;

CREATE TABLE `usuario_empresa`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `empresa_id` INTEGER,
    `usuario_id` INTEGER,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `usuario_empresa_FI_1` (`empresa_id`),
    INDEX `usuario_empresa_FI_2` (`usuario_id`),
    CONSTRAINT `usuario_empresa_FK_1`
        FOREIGN KEY (`empresa_id`)
        REFERENCES `empresa` (`id`),
    CONSTRAINT `usuario_empresa_FK_2`
        FOREIGN KEY (`usuario_id`)
        REFERENCES `usuario` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- conformidad_seguimieto_analisis
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `conformidad_seguimieto_analisis`;

CREATE TABLE `conformidad_seguimieto_analisis`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `conformidad_id` INTEGER,
    `participante_id` INTEGER,
    `paso_seguir` TEXT,
    `observaciones_revision` TEXT,
    `fecha_validacion` DATE,
    `observaciones` TEXT,
    `activo` TINYINT(1) DEFAULT 1,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `revisado` TINYINT(1) DEFAULT 0,
    `revisado_por` INTEGER,
    PRIMARY KEY (`id`),
    INDEX `conformidad_seguimieto_analisis_I_1` (`revisado_por`),
    INDEX `conformidad_seguimieto_analisis_FI_1` (`conformidad_id`),
    INDEX `conformidad_seguimieto_analisis_FI_2` (`participante_id`),
    CONSTRAINT `conformidad_seguimieto_analisis_FK_1`
        FOREIGN KEY (`conformidad_id`)
        REFERENCES `conformidad` (`id`),
    CONSTRAINT `conformidad_seguimieto_analisis_FK_2`
        FOREIGN KEY (`participante_id`)
        REFERENCES `participante` (`id`),
    CONSTRAINT `conformidad_seguimieto_analisis_FK_3`
        FOREIGN KEY (`revisado_por`)
        REFERENCES `participante` (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;

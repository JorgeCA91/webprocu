CREATE  TABLE IF NOT EXISTS `procu`.`region` (
  `id` INT(11) PRIMARY KEY NOT NULL ,
  `nombre` VARCHAR(45) NULL DEFAULT NULL ,
  `municipio` VARCHAR(45) NULL DEFAULT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `procu`.`municipio`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `procu`.`municipio` (
  `id` INT(11) PRIMARY KEY NOT NULL ,
  `nombre` VARCHAR(45) NULL DEFAULT NULL ,
  `region_id` INT(11) NOT NULL ,
  `codigo` VARCHAR(45) NULL DEFAULT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `procu`.`localidad`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `procu`.`localidad` (
  `id` INT(11) PRIMARY KEY NOT NULL ,
  `nombre` VARCHAR(45) NULL DEFAULT NULL ,
  `municipio_id` INT(11) NOT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `procu`.`mp`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `procu`.`mp` (
  `id` INT(11) PRIMARY KEY NOT NULL ,
  `nombre` VARCHAR(45) NOT NULL ,
  `direccion` VARCHAR(45) NOT NULL ,
  `region_id` INT(11) NOT NULL ,
  `longitud` VARCHAR(45) NULL DEFAULT NULL ,
  `latitud` VARCHAR(45) NULL DEFAULT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `procu`.`reporte`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `procu`.`reporte` (
  `id` INT(11) PRIMARY KEY NOT NULL ,
  `status` INT NULL DEFAULT NULL ,
  `tgenero` INT NULL DEFAULT NULL ,
  `mayMen` INT NULL DEFAULT NULL ,
  `grupo` INT NULL DEFAULT NULL ,
  `fechaReporte` DATE NULL DEFAULT NULL ,
  `fechaConclusion` DATE NOT NULL ,
  `motivo` INT NULL,
  `admin_id` INT(11) NOT NULL,
  `denunciante_id` INT(11) NOT NULL,
  `extraviado_id` INT(11) NOT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `procu`.`usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `procu`.`usuario` (
  `id` INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT ,
  `role` VARCHAR(15) NOT NULL DEFAULT "CIUDADANO" ,
  `nombre` VARCHAR(25) NULL DEFAULT NULL ,
  `apellido_paterno` VARCHAR(25) NULL DEFAULT NULL ,
  `apellido_materno` VARCHAR(25) NULL DEFAULT NULL ,
  `email` VARCHAR(100) NOT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `procu`.`admin`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `procu`.`admin` (
  `id` INT(11) PRIMARY KEY NOT NULL ,
  `pass` VARCHAR(45) NULL DEFAULT NULL ,
  `usuario_id` INT(11) NOT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `procu`.`identificacion`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `procu`.`identificacion` (
  `id` INT PRIMARY KEY NOT NULL ,
  `tipo` VARCHAR(45) NULL,
  `denunciante_id` INT NOT NULL, 
  `extraviado_id` INT NOT NULL
  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `procu`.`parentesco`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `procu`.`parentesco` (
  `id` INT PRIMARY KEY NOT NULL ,
  `parentesco` VARCHAR(45) NULL,
  `denunciante_id` INT NOT NULL  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `procu`.`denunciante`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `procu`.`denunciante` (
  `id` INT(11) PRIMARY KEY NOT NULL,
  `usuario_id` INT(11) NOT NULL ,
  `domicilio` VARCHAR(45) NULL ,
  `tel` VARCHAR(45) NULL ,
  `localidad_id` INT(11) NOT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `procu`.`extraviado`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `procu`.`extraviado` (
  `id` INT(11) PRIMARY KEY NOT NULL ,
  `fechaNac` DATE NOT NULL ,
  `edad` INT NULL ,
  `genero` VARCHAR(45) NULL ,
  `originario` VARCHAR(45) NULL ,
  `nacionalidad` VARCHAR(45) NULL ,
  `domicilio` VARCHAR(45) NULL ,
  `telefono` VARCHAR(45) NULL ,
  `correoElectronico` VARCHAR(45) NULL ,
  `redSocial` VARCHAR(45) NULL ,
  `localidad_id` INT(11) NOT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

-- MySQL Workbench Forward Engineering
drop schema mydb;
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`profesor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`profesor` (
  `rut` VARCHAR(15) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `nacimiento` VARCHAR(45) NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  `pass` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`rut`),
  INDEX `fk_profesor_usuario1_idx` (`usuario_idusuario` ASC),
  CONSTRAINT `fk_profesor_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `mydb`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`curso` (
  `idcurso` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `profesor_rut` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idcurso`),
  INDEX `fk_curso_profesor1_idx` (`profesor_rut` ASC),
  CONSTRAINT `fk_curso_profesor1`
    FOREIGN KEY (`profesor_rut`)
    REFERENCES `mydb`.`profesor` (`rut`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`alumno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`alumno` (
  `rut` VARCHAR(15) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `nacimiento` VARCHAR(45) NOT NULL,
  `curso_idcurso` INT NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  `pass` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`rut`),
  INDEX `fk_alumno_curso1_idx` (`curso_idcurso` ASC),
  INDEX `fk_alumno_usuario1_idx` (`usuario_idusuario` ASC),
  CONSTRAINT `fk_alumno_curso1`
    FOREIGN KEY (`curso_idcurso`)
    REFERENCES `mydb`.`curso` (`idcurso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_alumno_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `mydb`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`administrador` (
  `rut` VARCHAR(12) NOT NULL,
  `pass` VARCHAR(45) NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`rut`),
  INDEX `fk_administrador_usuario1_idx` (`usuario_idusuario` ASC),
  CONSTRAINT `fk_administrador_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `mydb`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`asignatura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`asignatura` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`curso_has_asignatura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`curso_has_asignatura` (
  `curso_idcurso` INT NOT NULL,
  `asignatura_id` INT NOT NULL,
  PRIMARY KEY (`curso_idcurso`, `asignatura_id`),
  INDEX `fk_curso_has_asignatura_asignatura1_idx` (`asignatura_id` ASC),
  INDEX `fk_curso_has_asignatura_curso1_idx` (`curso_idcurso` ASC),
  CONSTRAINT `fk_curso_has_asignatura_curso1`
    FOREIGN KEY (`curso_idcurso`)
    REFERENCES `mydb`.`curso` (`idcurso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_curso_has_asignatura_asignatura1`
    FOREIGN KEY (`asignatura_id`)
    REFERENCES `mydb`.`asignatura` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`profesor_has_asignatura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`profesor_has_asignatura` (
  `profesor_rut` VARCHAR(15) NOT NULL,
  `asignatura_id` INT NOT NULL,
  PRIMARY KEY (`profesor_rut`, `asignatura_id`),
  INDEX `fk_profesor_has_asignatura_asignatura1_idx` (`asignatura_id` ASC),
  INDEX `fk_profesor_has_asignatura_profesor1_idx` (`profesor_rut` ASC),
  CONSTRAINT `fk_profesor_has_asignatura_profesor1`
    FOREIGN KEY (`profesor_rut`)
    REFERENCES `mydb`.`profesor` (`rut`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_profesor_has_asignatura_asignatura1`
    FOREIGN KEY (`asignatura_id`)
    REFERENCES `mydb`.`asignatura` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- ALTER TABLE `mydb`.`Curso`
-- -----------------------------------------------------
ALTER TABLE `curso` CHANGE `profesor_rut` `profesor_rut` VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL;
ALTER TABLE `curso` CHANGE `idcurso` `idcurso` INT(11) NOT NULL;
-- -----------------------------------------------------
-- ALTER TABLE `mydb`.`alumno`
-- -----------------------------------------------------
ALTER TABLE `alumno` CHANGE `curso_idcurso` `curso_idcurso` INT(11) NULL;
-- -----------------------------------------------------
-- Insert `mydb`.`Administrador`
-- -----------------------------------------------------
insert into administrador values ('20.017.181-0','foQpnen/gKEC6', 1);
insert into administrador values ('18.721.418-1','fo5s.6C4fB22I', 1);
insert into administrador values ('20.016.671-k','fofMxjuyoeY5o', 1);

-- -----------------------------------------------------
-- Insert `mydb`.`Datis de prueba`
-- -----------------------------------------------------
INSERT INTO `alumno` (`rut`, `nombre`, `apellido`, `correo`, `direccion`, `nacimiento`, `curso_idcurso`, `usuario_idusuario`, `pass`) VALUES ('1.111.111-1', 'Nombre Prueba', 'Apellido Prueba', 'correo@gmail.com', 'Direccion #999', '01-01-1999', NULL, '3', '123456');
INSERT INTO `curso` (`idcurso`, `nombre`, `profesor_rut`) VALUES ('1', 'Curso Prueba', '20.017.181-0');
INSERT INTO `asignatura` (`id`, `nombre`) VALUES ('1', 'Asignatura Prueba');
INSERT INTO `profesor` (`rut`, `nombre`, `apellido`, `direccion`, `correo`, `nacimiento`, `usuario_idusuario`, `pass`) VALUES ('20.017.181-1', 'Nombre Prueba', 'Apellido Prueba', 'Direccion #999', 'correo@gmail.com', '01-01-1999', '2', '123456');
-- -----------------------------------------------------
-- Insert `mydb`.`Usuario`
-- -----------------------------------------------------
INSERT INTO usuario VALUES(NULL,'Administrador');
INSERT INTO usuario VALUES(NULL,'Profesor');
INSERT INTO usuario VALUES(NULL,'Alumno');
-- -----------------------------------------------------
-- Insert `mydb`.`Profesor`
-- -----------------------------------------------------
INSERT INTO `profesor` (`rut`, `nombre`, `apellido`, `direccion`, `correo`, `nacimiento`, `usuario_idusuario`, `pass`) VALUES ('0', 'Sin', 'Profesor', '', '', '', '2', '');
INSERT INTO `curso` (`idcurso`, `nombre`, `profesor_rut`) VALUES (0, 'Predeterminado', NULL);



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
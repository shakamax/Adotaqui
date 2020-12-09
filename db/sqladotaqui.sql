-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema adotaqui
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema adotaqui
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `adotaqui` DEFAULT CHARACTER SET utf8 ;
USE `adotaqui` ;

-- -----------------------------------------------------
-- Table `adotaqui`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adotaqui`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `email` VARCHAR(80) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `status` TINYINT NOT NULL DEFAULT 0,
  `dtNasc` DATE NULL,
  `celular` VARCHAR(20) NULL,
  `telFixo` VARCHAR(20) NULL,
  `cpf` VARCHAR(14) NULL,
  `cep` VARCHAR(9) NULL,
  `cidade` VARCHAR(40) NULL,
  `bairro` VARCHAR(60) NULL,
  `uf` VARCHAR(2) NULL,
  `avatar` BLOB NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adotaqui`.`animal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adotaqui`.`animal` (
  `idanimal` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `adotado` TINYINT NOT NULL DEFAULT 0,
  `cancelado` TINYINT NOT NULL DEFAULT 0,
  `fkusuario` INT NOT NULL,
  `porte` VARCHAR(45) NULL,
  `sexo` VARCHAR(45) NULL,
  `tipo` VARCHAR(45) NULL,
  `sobre` LONGTEXT NULL,
  PRIMARY KEY (`idanimal`),
  INDEX `fk_amigo_usuario1_idx` (`fkusuario` ASC),
  CONSTRAINT `fk_amigo_usuario1`
    FOREIGN KEY (`fkusuario`)
    REFERENCES `adotaqui`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adotaqui`.`problemaSaude`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adotaqui`.`problemaSaude` (
  `idProblema` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idProblema`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adotaqui`.`amigoSaude`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adotaqui`.`amigoSaude` (
  `fkanimal` INT NOT NULL,
  `fkproblema` INT NOT NULL,
  INDEX `fk_amigo_has_problemaSaude_problemaSaude1_idx` (`fkproblema` ASC),
  INDEX `fk_amigo_has_problemaSaude_amigo_idx` (`fkanimal` ASC),
  CONSTRAINT `fk_amigo_has_problemaSaude_amigo`
    FOREIGN KEY (`fkanimal`)
    REFERENCES `adotaqui`.`animal` (`idanimal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_amigo_has_problemaSaude_problemaSaude1`
    FOREIGN KEY (`fkproblema`)
    REFERENCES `adotaqui`.`problemaSaude` (`idProblema`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `adotaqui`.`fotos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adotaqui`.`fotos` (
  `idfotos` INT NOT NULL AUTO_INCREMENT,
  `foto` BLOB NOT NULL,
  `animal_idanimal` INT NOT NULL,
  PRIMARY KEY (`idfotos`),
  INDEX `fk_fotos_animal1_idx` (`animal_idanimal` ASC),
  CONSTRAINT `fk_fotos_animal1`
    FOREIGN KEY (`animal_idanimal`)
    REFERENCES `adotaqui`.`animal` (`idanimal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

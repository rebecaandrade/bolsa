SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `bolsa` ;
CREATE SCHEMA IF NOT EXISTS `bolsa` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `bolsa` ;

-- -----------------------------------------------------
-- Table `bolsa`.`Municipio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bolsa`.`Municipio` ;

CREATE  TABLE IF NOT EXISTS `bolsa`.`Municipio` (
  `siafi` INT NOT NULL ,
  `nome` VARCHAR(45) NOT NULL ,
  `uf` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`siafi`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bolsa`.`Favorecido`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bolsa`.`Favorecido` ;

CREATE  TABLE IF NOT EXISTS `bolsa`.`Favorecido` (
  `nis` INT NOT NULL ,
  `nome` VARCHAR(45) NOT NULL ,
  `cod_sub` INT NULL ,
  `cod_acao` INT NULL ,
  `cod_prog` INT NULL ,
  `cod_funcao` INT NULL ,
  `siafi` INT NOT NULL ,
  `fonte` VARCHAR(45) NULL ,
  PRIMARY KEY (`nis`) ,
  CONSTRAINT `fk_Favorecido_Municipio1`
    FOREIGN KEY (`siafi` )
    REFERENCES `bolsa`.`Municipio` (`siafi` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Favorecido_Municipio1_idx` ON `bolsa`.`Favorecido` (`siafi` ASC) ;


-- -----------------------------------------------------
-- Table `bolsa`.`Parcela`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bolsa`.`Parcela` ;

CREATE  TABLE IF NOT EXISTS `bolsa`.`Parcela` (
  `mes` INT NOT NULL ,
  `valor` DOUBLE NOT NULL ,
  `nis` INT NOT NULL ,
  PRIMARY KEY (`mes`, `nis`) ,
  CONSTRAINT `fk_Parcela_Favorecido`
    FOREIGN KEY (`nis` )
    REFERENCES `bolsa`.`Favorecido` (`nis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Parcela_Favorecido_idx` ON `bolsa`.`Parcela` (`nis` ASC) ;

USE `bolsa` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
